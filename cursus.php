<div class="en-tete ">
    <div class="lt ">
        <div class="l1 ">
            <img src="photo/motarboard_30px.png " width="40px " height="40px ">
        </div>
        <div class="sec-ac ">
            <div class="e5 "> Cursus académique</div>
            <div class="e6 ">Diplomes et formation certifiantes</div>
        </div>
    </div>

    <div class="pointillet ">
        <img src="photo/img_menu.png ">
    </div>

</div>
<div class="information ">
    <div class="info ">
        <div class="s2 ">
            <div class="c0 ">DIPET 2 Electrotechnique<strong> -@ENSET de Douala </strong></div>
            <div class="c1 ">
                <span class="a ">Aout 2016</span> - Gestion d 'éclairage d 'une maison (Android + Arduino)</div>
        </div>
        <hr class="k ">

        <div class="s2 ">
            <div class="c0 ">Oracle Certified Associate<strong>-@Kentnix Sarl</strong></div>
            <div class="c1 ">
                <span class="a ">Mars 2009</span> - oracle Database 11g Administration</div>
        </div>
        <hr class="k ">
        <div class="s2 ">
            <div class="c0 ">Oracle SQL Certified<strong> -@Kentnix Sarl </strong></div>
            <div class="c1 ">
                <span class="a ">Décembre 2008</span> - SQL 2, SQL 3, XML</div>
        </div>
        <hr class="k ">

        <div class="S2 ">
            <div class="c0 ">Licence professionnelle<strong> -@Douala Institute of Tech.</strong></div>
            <div class="c1 ">
                <span class="a ">Octobre 2008</span> - Télécommunication & réseaux</div>
        </div>
        <hr class="k ">

        <div class="s2 ">
            <div class="c0 ">DEC/BTS<strong> -@CCNB Dieppe  canada </strong></div>
            <div class="c1 ">
                <span class="a ">Septembre 2007</span> - programmation Appliquée pour Internet</div>
        </div>
        <hr class="h ">
        <div class="s2 ">
            <div class="c0 ">Baccalauréat<strong> -@Lycée Technique de Douala </strong></div>
            <div class="c1 ">
                <span class="a ">juin 2005</span> - Electrotechnique, mention BIEN(major de centre)
            </div>
        </div>

    </div>
</div>




<?php
    class cursus{
       public  $diplome_prof;
       public  $ecole_prof;
       public  $annee_prof;
       public  $projet_prof;
       public  $association;
       public  $entreprise_association;
       public  $annee_association;
       public  $projet_association;
       public  $certification;
       public  $entreprise_certification;
       public  $annee_certification;
       public  $projet_certification;
       public  $end_school;
       public  $diplome_end;
       public  $annee_end;
       public  $filiere_end;
       public  $second_school;
       public  $second_diplome;
       public  $annee_second;
       public  $filiere_second;
       public  $first_school;
       public  $first_diplome;
       public  $annee_first;
       public  $filiere_first;

        public function __construct($filiere_first,$annee_first,$first_diplome,$first_school,$filiere_second,$annee_second,$second_diplome,$second_school,$filiere_end,$annee_end,$diplome_end,$end_school,$projet_certification,$annee_certification,$entreprise_certification,$certification,$diplome_prof,$ecole_prof,$annee_prof,$projet_prof,$association,$entreprise_association,$annee_association,$projet_association)
        {
        $this-> entreprise_certification=$entreprise_certification;    
        $this-> annee_certification=$annee_certification;    
        $this-> projet_certification=$projet_certification;    
        $this-> end_school=$end_school;    
        $this-> diplome_end=$diplome_end;    
        $this-> annee_end=$annee_end;    
        $this-> filiere_end=$filiere_end;    
        $this-> second_school=$second_school;    
        $this-> second_diplome=$second_diplome;    
        $this-> annee_second=$annee_second;    
        $this-> filiere_second=$filiere_second;    
        $this-> first_school=$first_school;    
        $this-> first_diplome=$first_diplome;    
        $this-> annee_first=$annee_first;    
        $this-> filiere_first=$filiere_first;    
        $this-> certification=$certification;    
        $this-> projet_association=$projet_association;    
        $this-> annee_association=$annee_association;    
        $this-> entreprise_association=$entreprise_association;    
        $this-> association=$association;    
        $this-> projet_prof=$projet_prof;    
        $this-> annee_prof=$annee_prof;    
        $this-> ecole_prof=$ecole_prof;    
        $this-> diplome_prof=$diplome_prof;    
        }

        public function get_professora(){
            $this-> diplome_prof;
        }

        public function get_end(){
            $this-> diplome_end;
        }

        public function get_school1(){
            $this-> ecole_prof;
        }

        public function get_school3(){
            $this-> end_school;
        }

        public function get_projet3(){
            $this-> projet_association;
        }

        public function get_projet2(){
            $this-> projet_certification;
        }

        public function get_projet1(){
            $this-> projet_prof;
        }

        public function get_annee3(){
            $this-> annee_association;
        }

        public function get_year3(){
            $this-> annee_end;
        }

        public function get_anne2(){
            $this-> annee_certification;
        }

        public function get_year(){
            $this-> annee_first;
        }

        public function get_year1(){
            $this-> annee_prof;
        }

        public function get_year2(){
            $this-> annee_second;
        }

        public function get_diplome2(){
            $this-> second_diplome;
        }

        public function get_school2(){
            $this-> second_school;
        }

        public function get_filiere3(){
            $this-> filiere_end;
        }

        public function get_filiere(){
            $this-> filiere_first;
        }

        public function get_filiere2(){
            $this-> filiere_second;
        }

        public function get_association(){
            $this-> association;
        }

        public function get_entreprise3(){
            $this-> entreprise_association;
        }

        public function get_entreprise2(){
            $this-> entreprise_certification;
        }

        public function get_certification(){
            $this-> certification;
        }

        public function get_school(){
            $this-> first_school;
        }

        public function get_diplome(){
            $this-> first_diplome;
        }


       }


?>