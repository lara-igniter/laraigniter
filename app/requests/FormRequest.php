<?php

namespace App\requests;

use Tightenco\Collect\Support\Collection;

abstract class FormRequest
{
    /**
     * Form Validation variable
     *
     * @var \CI_Form_validation
     */
    protected $form_validation;

    /**
     * Input variable
     *
     * @var \CI_Input
     */
    protected $input;

    /**
     * Validated data
     *
     * @var array
     */
    protected $valid_data = [];


    public function __construct(\CI_Form_validation $form_validation = null, \CI_Input $input = null)
    {
        if(!isset($form_validation)) {
            app()->load->library('form_validation');
            $input = app()->input;
            $form_validation = app()->form_validation;
        }

        $form_validation->set_error_delimiters('<p style="color:red;">', '</p>');

        $this->input = $input;
        $this->form_validation = $form_validation;
    }

    /**
     * Return rules validation
     *
     * @return array
     */
    abstract public function rules() : array;

    /**
     * Return messages by each rule
     *
     * @return array
     */
    abstract public function messages() : array;

    /**
     * Return different attribute name
     *
     * @return array
     */
    abstract public function attributes() : array;

    /**
     * Validated method check if exist abstract methods
     * or return the default validation message and attributes
     * of codeigniter framework
     *
     * @return bool
     */
    public function validated() : bool
    {
        foreach($this->rules() as $index => $rules) {
            $string_rules = '';
            foreach($rules as $rule) {
                $string_rules != "" && $string_rules .= "|";
                $string_rules .= $rule;
            }

            $attributes = '';

            if(method_exists($this, 'attributes') && !empty($this->attributes())) {
                $attributes = isset($this->attributes()[$index]) ? $this->attributes()[$index] : '';
            }

            $this->form_validation->set_rules($index, $attributes, $string_rules);

            if(method_exists($this, 'messages') && !empty($this->messages())) {
                foreach($this->rules() as $filed_name => $_rules) {
                    foreach ($_rules as $rule) {
                        $rule_clear = $rule;

                        if (strpos($rule, '[') !== false) {
                            $rule_clear = substr($rule, 0, strpos($rule, "["));
                        }

                        $message_index = $filed_name . '.' . $rule_clear;

                        if (isset($this->messages()[$message_index])) {
                            $this->form_validation->set_rules($filed_name, $attributes, $string_rules, [$rule_clear => $this->messages()[$message_index]]);
                            $this->form_validation->set_message($rule_clear, $this->messages()[$message_index]);
                        }
                    }
                }
            }
        }

        if($this->form_validation->run()) {
            foreach($this->input->post() as $key => $input) {
                $check_key = is_array($input) ? $key . '[]' : $key;
                if (array_key_exists($check_key, $this->rules())) {
                    if ($key == 'description') {
                        $this->valid_data[$key] = $this->input->post($key);
                    } else {
                        $this->valid_data[$key] = $this->input->post($key, true);
                    }
                }
            }
        }

        return $this->form_validation->run();
    }

    /**
     * Return post data as array
     *
     * @return array
     */
    public function all() : array
    {
        return $this->input->post();
    }

    /**
     * Return valid post data as object
     *
     * @return array
     */
    public function valid() : array
    {
        return $this->valid_data;
    }

    /**
     * Return only validated data
     *
     * @param array $data
     * @return array
     */
    private function push(array $data) : array
    {
        $validated_data = [];

        foreach ($data as $key => $value) {
            if (array_key_exists($key, $this->rules())) {
                $validated_data[$key] = $this->input->post($key);
            }
        }

        return $validated_data;
    }
}
