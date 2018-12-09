<?php
    class Core_Template extends Core_Application {
        function render($controller_name, $name, $addvars) {
            $this->set_template($controller_name, $name, $addvars);
            $this->replace_vars();
            print $this->template;
        }

        function replace_vars() {
            foreach($this->vars as $find => $replace) {
                $this->template = str_replace('{'.$find.'}', $replace, $this->template);
            }
        }

        function set_template($controller_name, $name, $vars = null) {
            $this->vars = $vars;
            $this->ctrl_name = $controller_name;
            $this->template_name = $name;
            $this->template_uri = 'view/'.$this->ctrl_name.'/'.$this->template_name.'.tpl';
            $this->template = file_get_contents($this->template_uri);
        }
    }