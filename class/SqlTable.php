<?php
    class SqlTable {
        private $fields = array();
        private $settings = array();

        public function __construct(array $fields, array $settings) {
            $this->fields = $fields;
            $this->settings = $settings;
        }

        public function getInfo() {
            return $this->fields;
        }

        public function getSettings() {
            return $this->settings;
        }

        public function getValues() {
            $field_values = array();
            foreach($this->fields as $key => $value) {
                $field_values[] = $value;
            }
        }

        public function getFields() {
            $field_names = array();
            foreach($this->fields as $key => $value) {
                $field_names[] = $key;
            }
            return $field_names;
        }
    }