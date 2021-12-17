<div class=" int-loisir ">

    <div class="pin ">
        <img src=" photo/point-interet.png " width="95% " height=" 100% ">
    </div>
    <div class="langues ">
        <img src="photo/langue.png " width="100% " height=" 100% ">
    </div>
</div>
<?php
    class divertissement{
       public $point_interet;
       public $langue;
       
        public function __construct($point_interet,$langue)
        {
        $this-> loisir=$point_interet;    
        $this-> langue=$langue;    
     }

        public function get_loisir(){
            $this-> point_interet;
        }

        public function get_langue(){
            $this-> langue;
        }
    }


?>