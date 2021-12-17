<div class="exp-pro ">
        <div class="entete ">
            <div class="y0 ">
                <div class="logo ">
                    <img src="photo/real_estate_80px.png " alt="real " width="40px " height=" 40px ">
                </div>
                <div class="sec-haut ">
                    <div class="e3 "> Expérience professionnelle</div>
                    <div class="e4 "> Expertise en entreprise</div>

                </div>
            </div>

            <div class="pointillet ">
                <img src="photo/img_menu.png ">
            </div>
        </div>
        <div class=" information ">
            <div class=" info ">
                <div class="s1 ">
                    <div class="c0 ">Chef des projets technologiques <strong> -@ETS. M DE M </strong></div>
                    <div class="c1 ">
                        <span class="a ">De juillet 2019 à ce jour - http://mdem.cm</span>
                    </div>

                    <div class="c1 ">chef du projet annuaire-universel.cm de l'ART</div>
                </div>
                <hr class="h ">
                <div class="s1 ">
                    <div class="c0 ">Fondateur & <strong>-@startup ChickDev</strong></div>
                    <div class="c1 ">
                        <span class="a ">De juin 2015 à ce jour - http://chickdev.com</span>
                    </div>

                    <div class="c1 ">Réalisation de plusieus sites web et applications web et mobiles</div>

                </div> 





                <hr class="h ">
                <div class="s1 ">
                    <div class="c0 ">Enseignant <strong> -@Institut Universitaire de la Cote </strong>
                    </div>
                    <div class="c1 ">
                        <span class="a ">De Octobre 2011 à ce jour - http://istdi.net</span>

                    </div>

                    <div class="c1 ">"Analyse. UML & MERISE ","BD/SQL. ORACLE & MYSQL ", "Dév.IOS & </b> Android ", "BI &Big Data Talend DI & Hadoop ".1ère,2ème et 4ème année
                    </div>
                </div>

                <hr class="h">
                <div class="s1 ">
                    <div class="c0 ">Développeur en chef <strong> -@Kayroual group</strong>
                    </div>
                    <div class="c1 ">
                        <span class="a ">De Mai 2013 à juin 2015 - http://khayroual.com
                            </span>

                    </div>
                    <div class="c1 ">Réalisation de multiples projets logiciels et web, infographie, ...

                    </div>

                </div>
                <hr class="h">
                <div class="s1 ">
                    <div class="c0 ">Responsable commercial <strong> -@BAO Sarl </strong></div>
                    <div class="c1 ">
                        <span class="a ">De Décembre 2012 à juin 2013 - http://bao-sarl.com</span>
                    </div>

                    <div class="c1 ">Définition des stratégies commerciales, controle de qualité, suivi ...</div>

                </div>
            </div>
        </div>

    </div>
    <?php
    class expérience{
        public $first_poste_projet;
        public $first_entreprise_projet;
        public $periode_first_projet;
        public $lien_first_projet;
        public $first_small_poste;
        public $other_poste_projet;
        public $other_lien_projet;
        public $other_entreprise_projet;
        public $periode_other_projet;
        public $other_small_poste;
        public $teacher;
        public $school;
        public $periode_teaching;
        public $lien_school;
        public $matieres;
        public $devops;
        public $entreprise_devops;
        public $periode_devops;
        public $lien_devops;
        public $small_devops;
        public $gestion;
        public $entreprise_gestion;
        public $periode_gestion;
        public $lien_gestion;
        public $small_gestion;
       
        
        public function __construct($small_gestion,$lien_gestion,$periode_gestion,$entreprise_gestion,$gestion,$small_devops,$lien_devops,$periode_devops,$entreprise_devops,$devops,$matieres,$lien_school,$periode_teaching,$school,$teacher,$other_small_poste,$periode_other_projet,$other_entreprise_projet,$other_lien_projet,$other_poste_projet,$first_poste_projet,$first_entreprise_projet,$periode_first_projet,$lien_first_projet,$first_small_poste)
        {
          $this->   other_poste_projet=$other_poste_projet;
          $this->   small_gestion=$small_gestion;
          $this->   lien_gestion=$lien_gestion;
          $this->   periode_gestion=$periode_gestion;
          $this->   entreprise_gestion=$entreprise_gestion;
          $this->   gestion=$gestion;
          $this->   small_devops=$small_devops;
          $this->   lien_devops=$lien_devops;
          $this->   periode_devops=$periode_devops;
          $this->   entreprise_devops=$entreprise_devops;
          $this->   devops=$devops;
          $this->   matieres=$matieres;
          $this->   lien_school=$lien_school;
          $this->   periode_teaching=$periode_teaching;
          $this->   school=$school;
          $this->   teacher=$teacher;
          $this->   other_small_poste=$other_small_poste;
          $this->   periode_other_projet=$periode_other_projet;
          $this->   other_entreprise_projet=$other_entreprise_projet;
          $this->   other_lien_projet=$other_lien_projet;
          $this->   first_poste_projet=$first_poste_projet;  
          $this->   first_entreprise_projet=$first_entreprise_projet;  
          $this->   periode_first_projet=$periode_first_projet;  
          $this->   lien_first_projet=$lien_first_projet;  
          $this->   first_small_poste=$first_small_poste;  
        }

        public function get_poste1(){
            $this-> first_poste_projet;
        }

        public function get_entreprise1(){
            $this-> first_entreprise_projet;
        }

        public function get_periode1(){
            $this-> periode_first_projet;
        }

        public function get_lien1(){
            $this-> lien_first_projet;
        }

        public function get_small1(){
            $this-> first_small_poste;
        }

        public function get_poste2(){
            $this-> other_poste_projet;
        }

        public function get_lien2(){
            $this-> other_lien_projet;
        }

        public function get_entreprise2(){
            $this-> other_entreprise_projet;
        }

        public function get_periode2(){
            $this-> periode_other_projet;
        }

        public function get_small2(){
            $this-> other_small_poste;
        }

        public function get_teacher(){
            $this-> teacher;
        }

        public function get_school(){
            $this-> school;
        }

        public function get_teaching(){
            $this-> periode_teaching;
        }

        public function get_lien3(){
            $this-> lien_school;
        }

        public function get_matiere(){
            $this-> matieres;
        }

        public function get_devops(){
            $this-> devops;
        }

        public function get_entreprise3(){
            $this-> entreprise_devops;
        }

        public function get_periode3(){
            $this-> periode_devops;
        }

        public function get_lien4(){
            $this-> lien_devops;
        }

        public function get_small3(){
            $this-> small_devops;
        }

        public function get_gestion(){
            $this-> gestion;
        }

        public function get_entreprise4(){
            $this-> entreprise_gestion;
        }

        public function get_periode4(){
            $this-> periode_gestion;
        }

        public function get_lien5(){
            $this-> lien_gestion;
        }

        public function get_small5(){
            $this-> small_gestion;
        }


    }


?>