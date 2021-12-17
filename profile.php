<div class="int-perso">

    <div class="content-search-bar"> <img src="photo/menu_filled_50px.png" alt="search" width="10% " height="80%">
        <input class="input_search" placeholder="Recherche par ici " type="search ">
        <div class="action_btn ">
            <img src="photo/i;g_search.png " width="33% " height="80%">
            <img src="photo/thick_vertical_line.png " alt="im2 " width="33% " height="80%">
            <img src="photo/img_delete.png " alt="im3 " width="33% " height="80% ">
        </div>
    </div>


    <div class=" sec-id ">
        <div class="element">

            <img class="ph " src="photo/photo2.jpg " alt="ph ">
            <div class="name ">
                <div class="e1 ">NOUMEN Frech</div>
                <div class="e2 "> architecte logiciel/Devops </div>
            </div>
        </div>

        <div class='button-parent curseur'>
            <input type="checkbox" id='btn'>
            <label for="btn" class='button'>
                <img src="photo/img_telegram.png" alt="" width="30" height="30">
            </label>

            <div class="link-parent">
                <a href='#' class='link-item' id='link-one'>
                    <img src="photo/logo-Gmail-2.jpg" class="photo" width="40" height="40">
                </a>
                <a href='#' class='link-item' id='link-two'>
                    <img src="photo/téléchargement .png" class="photo" width="40" height="40">
                </a>
            </div>
        </div>
    </div>


</div>
<div class="i7 ">
    <div class="i8 ">
        <div class="gat">
            <div class="logo ">
                <img src="photo/img_hbd.png " alt="img_hbd.png " width="40px " height=" 40px " />
            </div>
            <div class="info-local ">
                <div class="separation">
                    <div class="info-peso ">
                        <div class="e8">Née le 20 octobre 1986</div>
                        <div class="e8">originaire du sud cameroun</div>
                        <div class="e8">Marié, 02 enfants - santé RAS</div>
                    </div>
                    <div class="pi"> </div>
                </div>
            </div>
        </div>

        <div class="loc">
            <div class="logo ">
                <img src="photo/img_location.png " width="40px " height=" 40px " />
            </div>
            <!-- <div class="resi "> -->

            <div class="info-local ">
                <div class="separation">
                    <div class="info-peso">
                        <div class="e8">Résidant à Ndogbong</div>
                        <p class="e8">Douala - cameroun</p>
                        <p class="e8">Map:
                            <span class="e50"> 4.053276, 9.765047</span></p>
                    </div>
                    <div class="pi"> </div>
                </div>
            </div>
        </div>
        <div class="nu">
            <div class="logo ">
                <img src="photo/phone_24px.png " width="40px " height=" 40px " />
            </div>
            <div class="info-local ">
                <div class="separation">
                    <div class="info-peso ">

                        <div class="e8 ">(237) 656988710</div>
                        <div class="e50 ">Mobile, Telegram, Whatsapp</div>

                    </div>
                    <div class="pi"> </div>
                </div>
            </div>
        </div>

        <div class="env ">
            <div class="logo ">
                <img src=" photo/img_message.png " alt=" img_message.png " width="40px " height=" 40px " />
            </div>
            <div class="info-local ">
                <div class="info-peso ">
                    <div class="e8 ">warrennoumen7@gmail.com</div>
                    <div class="e50 ">Google+, Twitter, linkedin, Github</div>
                </div>
            </div>
        </div>

        <div class=" end3 ">

            <div class=" end1 ">
                +45 PROJETS
            </div>
            <div class=" end2 ">
                +31 CONTRATS
            </div>


            <div class=" end4 ">
                12 ANS D'EXP
            </div>
        </div>



    </div>



</div>


<?php
    class profile{
        public  $cover_background;
        public  $second_photo;
        public  $name;
        public  $profession;
        public  $info_naissance;
        public  $original_naissance;
        public  $status;
        public  $residence;
        public  $country;
        public  $MAP;
        public  $telephone_number;
        public  $liaison_number;
        public  $email;
        public  $liaison_email;
        public  $number_projet;
        public  $experience_year;
        public  $number_contract;

        public function __construct($number_contract,$experience_year,$number_projet,$liaison_email,$email,$liaison_number,$telephone_number,$MAP,$country,$cover_background,$residence,$second_photo,$name,$profession,$info_naissance,$original_naissance,$status)
        {
            $this-> cover_background=$cover_background;  
            $this-> second_photo=$second_photo;  
            $this-> name=$name;  
            $this-> profession=$profession;  
            $this-> info_naissance=$info_naissance;  
            $this-> original_naissance=$original_naissance;  
            $this-> status=$status;  
            $this-> residence=$residence;  
            $this-> country=$country;  
            $this-> MAP=$MAP;  
            $this-> telephone_number=$telephone_number;  
            $this-> liaison_number=$liaison_number;  
            $this-> email=$email;  
            $this-> liaison_email=$liaison_email;  
            $this-> number_projet=$number_projet;  
            $this-> experience_year=$experience_year;  
            $this-> number_contract=$number_contract;  
        }

        public function get_country(){
            $this-> country;
        }

        public function get_MAP(){
            $this-> MAP;
        }

        public function get_phone(){
            $this-> phone;
        }

        public function get_number(){
            $this-> number;
        }

        public function get_account(){
            $this-> acount_email;
        }

        public function get_project(){
            $this-> project;
        }

        public function get_experience(){
            $this-> experience;
        }

        public function get_contract(){
            $this-> contract;
        }


        public function get_email(){
            $this-> email;
        }


        public function get_name(){
            $this-> name;
        }

        public function get_cover(){
            $this-> cover_background;
        }

        public function get_photo(){
            $this-> second_photo;
        }

        public function get_profession(){
            $this-> profession;
        }

        public function get_naissance(){
            $this-> naissance;
        }

        public function get_origine(){
            $this-> origine;
        }

        public function get_status(){
            $this-> status;
        }

        public function get_residence(){
            $this-> residence;
        }
    }


?>