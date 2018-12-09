<?php
    class Core_Template extends Core_Application {

        function render($controller_name, $name, $addvars) {
            $this->vars = $addvars;
            $this->set_template($controller_name, $name);
            $this->replace_vars();
            print $this->template;
        }

        function replace_vars() {
            foreach($this->vars as $find => $replace) {
                $this->template = str_replace('{'.$find.'}', $replace, $this->template);
            }
        }

        function set_template($controller_name, $name) { 
            $this->ctrl_name = $controller_name;
            $this->template_name = $name;
            $this->template_uri = 'view/'.Core_Config::get(['style', 'template']).'/'.$this->ctrl_name.'/'.$this->template_name.'.tpl';
            $this->template = file_get_contents($this->template_uri);
            $this->checkMainVars();
        }

        function checkMainVars() {
            if(!isset($this->vars['TITLE'])) {
                $this->vars['TITLE'] = Core_Config::get(['site', 'title']);
            }
            if(!isset($this->vars['STYLE'])) {
                $this->vars['STYLE'] = '/view/'.Core_Config::get(['style', 'template']).'/style/'.Core_Config::get(['style', 'main_style']);
            }
        }
    }