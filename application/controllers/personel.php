<?php
    
    class Personel extends CI_Controller {

        public function index() {
            $rows = $this->db->get("personel")->result();

            /*
                $viewData = array (
                    "rows" => $rows
                );
            */

            $viewData = new stdClass();
            $viewData->rows = $rows;

            $this->load->view("listeleme", $viewData);
        }

        public function updatePage() {

            $personel_id = $this->uri->segment(3);
            $row = $this
                ->db
                ->where("personel_id", $personel_id)
                ->get("personel")
                ->row();
            
            $viewData = new stdClass();

            $viewData->row = $row;

            $this->load->view("duzenle", $viewData);
        }

        public function update($personel_id) {
                        
            $personel_title  = $this->input->post("personel_title");
            $personel_detail = $this->input->post("personel_detail");

            $data = array(
                "personel_title"  => $personel_title,
                "personel_detail" => $personel_detail
            );

            $update =$this
                    ->db
                    ->where("personel_id", $personel_id)
                    ->update("personel", $data);
            
            if ($update) {
                redirect(base_url("personel"));
            }
            else {
                echo "Düzenleme işlemi sırasında bir problem oluştu!!!";
            }
        }
        
        public function insertPage() {
            $this->load->view("ekle");           
        }

        public function insert() {
           
            $personel_title  = $this->input->post("personel_title");
            $personel_detail = $this->input->post("personel_detail");

            $data = array (
                "personel_title"  => $personel_title,
                "personel_detail" => $personel_detail
            );

            $insert = $this->db->insert("personel", $data);


            if ($insert) {

                redirect(base_url("personel"));

            }
            else {
                echo "Ekleme başarılı değildir!!";
            }

        }

        public function delete($personel_id) {
            $delete = $this->db->where("personel_id", $personel_id)->delete("personel");
            
            if ($delete) {
                redirect(base_url("personel"));
            }
            else {
                echo "Silme işlemi Sırasında bir proplem oluştu!!!";
            }
        }

        public function siralaid() {
               $rows = $this
                    ->db
                    ->order_by("personel_id", "asc")
                    ->get("personel")
                    ->result();

                if($rows == true) {
                    redirect(base_url("personel"));
                }
                else {
                    echo "Sıralam işlemi başarısız!!";
                }
        }

        public function siralad() {
            $rows = $this
                 ->db
                 ->order_by("personel_title", "asc")
                 ->get("personel")
                 ->result();

            if($rows == true) {
                redirect(base_url("personel"));
            }
            else {
                echo "Sıralam işlemi başarısız!!";
            }
        }

        public function siralaciklama() {
            $rows = $this
                 ->db
                 ->order_by("personel_detail", "asc")
                 ->get("personel")
                 ->result();

            if($rows == true) {
                redirect(base_url("personel"));
            }
            else {
                echo "Sıralam işlemi başarısız!!";
            }
        }


    }
    