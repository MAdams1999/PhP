<?php
    class NightsWatch implements IFighter
    {
        private $_fighter;

        public function recruit($meat)
        {
            if ($meat instanceof IFighter)
            {
                $_fighter .= $meat->fight();
            }
        }

        public function fight()
        {
            print($_fight);
        }
    }
?>