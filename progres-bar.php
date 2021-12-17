<div class=" progress ">
    <div class=" pro1 ">
        <div class=" kad ">
            <div class=" cadre ">
                <img src=" photo/img_check.png " width="30px " height=" 30px ">
            </div>
            <div class=" ct1 ">
                <div class=" e11 ">
                    <strong> Developpement front-end</strong>

                    <div class=" fav ">
                        <img src="photo/favorite.png " width="30px " height=" 30px ">
                    </div>
                </div>
                <div class=" e10 "> HTML5, SASS, vueJS, Angular, JavaFX, ...

                </div>
                <div class=" bar ">
                    <div class=" e34 ">
                        <div class=" e15 ">
                            <span class=" cercle ">

                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class=" pro2 ">
        <div class=" kad ">
            <div class=" cadre ">
                <img src=" photo/img_check.png " width="30px " height=" 30px ">
            </div>
            <div class=" ct1 ">
                <div class=" e11 ">
                    <strong> Developpement back-end</strong>
                    <div class=" fav ">
                        <img src="photo/favorite.png " width="30px " height=" 30px ">
                    </div>

                </div>
                <div class=" e10 "> NodeJS, Drupal 8, Laravel, Koltin, Java EE 7</div>
                <div class=" bar ">
                    <div class=" e37 ">
                        <div class=" e17 ">
                            <span class=" cercle17 ">

                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class=" pro3 ">
        <div class="kad ">
            <div class=" cadre ">
                <img src=" photo/img_check.png " width="30px " height=" 30px ">
            </div>
            <div class=" ct1 ">
                <div class=" e11 ">
                    <strong> Developpement mobile</strong>
                    <div class=" fav ">
                        <img src="photo/favorite.png " width="30px " height=" 30px ">
                    </div>
                </div>
                <div class=" e10 "> Android Koltin, IOS Swift, cordova, Flutter</div>
                <div class=" bar ">
                    <div class=" e38 ">
                        <div class=" e18 ">
                            <span class=" cercle18 ">

                            </span>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class=" pro4 ">
        <div class="kad ">
            <div class=" cadre ">
                <img src=" photo/img_check.png " width="30px " height=" 30px ">
            </div>
            <div class=" ct1 ">
                <div class=" e11 ">
                    <strong> UI / UX Design</strong>
                    <div class=" fav ">
                        <img src="photo/favorite.png " width="30px " height=" 30px ">
                    </div>
                </div>
                <div class=" e10 "> photoshop CC, Adobe XD, Material Design</div>
                <div class=" bar ">
                    <div class=" e39 ">
                        <div class=" e19 ">
                            <span class=" cercle19 ">

                            </span>
                        </div>


                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class=" pro5 ">
        <div class=" kad ">
            <div class=" cadre ">
                <img src=" photo/img_check.png " width="30px " height=" 30px ">
            </div>
            <div class=" ct1 ">
                <div class=" e11 ">
                    <strong> Base de données & Big Data</strong>
                    <div class=" fav ">
                        <img src="photo/favorite.png " width="30px " height=" 30px ">
                    </div>
                </div>
                <div class=" e10 "> Oracle 11g, postgreSQL, Hadoop, Talend DI</div>
                <div class=" bar ">
                    <div class=" e40 ">
                        <div class=" e20 ">
                            <span class=" cercle20 ">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" pro6 ">
        <div class="kad ">
            <div class=" cadre ">
                <img src=" photo/img_check.png " width="30px " height=" 30px ">
            </div>
            <div class=" ct1 ">
                <div class=" e11 ">
                    <strong> Outils / Environnements</strong>
                    <div class=" fav ">
                        <img src="photo/favorite.png " width="30px " height=" 30px ">
                    </div>
                </div>
                <div class=" e10 "> Visual Paradigm, Git, Docker, K8s, Linux</div>
                <div class=" strol ">
                    <div class=" bar ">
                        <div class=" e41 ">
                            <div class=" e21 ">
                                <span class=" cercle21 ">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
class progress{
    public  $dev_back;
    public  $dev_frond;
    public  $list_frond;
    public  $list_back;
    public  $level_back;
    public  $level_frond;
    public  $dev_mobil;
    public  $list_mobil;
    public  $level_mobil;
    public  $dev;
    public  $list;
    public  $level;
    public  $database;
    public  $level_database;
    public  $list_database;
    public  $level_env;
    public  $list_env;
    public  $env;

    public function __construct($env,$list_env,$level_env,$list_database,$level_database,$database,$level,$list,$dev,$level_mobil,$dev_back,$dev_frond,$list_frond,$list_back,$level_back,$level_frond,$dev_mobil,$list_mobil)
    {
        $this-> dev_back=$dev_back;
        $this-> dev_frond=$dev_frond;
        $this-> list_frond=$list_frond;
        $this-> list_back=$list_back;
        $this-> level_back=$level_back;
        $this-> level_frond=$level_frond;
        $this-> dev_mobil=$dev_mobil;
        $this-> list_mobil=$list_mobil;
        $this-> level_mobil=$level_mobil;
        $this-> dev=$dev;
        $this-> list=$list;
        $this-> level=$level;
        $this-> database=$database;
        $this-> level_database=$level_database;
        $this-> list_database=$list_database;
        $this-> level_env=$level_env;
        $this-> list_env=$list_env;
        $this-> env=$env;
    }
                                             
    public function get_backend(){
        $this-> dev_back;
    }

    public function get_fronend(){
        $this-> dev_frond;
    }

    public function get_list1(){
        $this-> list_back;
    }

    public function get_list2(){
        $this-> list_frond;
    }

    public function get_level1(){
        $this-> level_back;
    }

    public function get_level2(){
        $this-> level_frond;
    }

    public function get_mobile(){
        $this-> dev_mobil;
    }

    public function get_list3(){
        $this-> list_mobil;
    }

    public function get_list4(){
        $this-> list_env;
    }

    public function get_list5(){
        $this-> list_database;
    }

    public function get_database(){
        $this-> database;
    }

    public function get_level3(){
        $this-> level_mobil;
    }

    public function get_level4(){
        $this-> level_env;
    }

    public function get_level5(){
        $this-> level_database;
    }

    public function get_develop(){
        $this-> dev;
    }

    public function get_list(){
        $this-> list;
    }

    public function get_level(){
        $this-> level;
    }

    public function get_env(){
        $this-> env;
    }

}
?>

{}