<?php
class ImageUploader {
  private $target_dir;
  private $target_file;
  private $uploadOk;
  private $imageFileType;

  public function __construct($target_dir) {
    $this->target_dir = $target_dir;
    $this->target_file = $this->target_dir . basename($_FILES["fileToUpload"]["name"]);
    $this->uploadOk = 1;
    $this->imageFileType = strtolower(pathinfo($this->target_file, PATHINFO_EXTENSION));
  }

  public function checkImage() {
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        $this->uploadOk = 1;
      } else {
        echo "Het bestand is geen afbeelding.. ";
        $this->uploadOk = 0;
      }
    }
  }

  public function checkFileExists() {
    if (file_exists($this->target_file)) {
      echo "Sorry, het bestand bestaat al. ";
      $this->uploadOk = 0;
    }
  }

  public function checkFileSize() {
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, je bestand is te groot ";
      $this->uploadOk = 0;
    }
  }

  public function checkFileType() {
    if($this->imageFileType != "jpg" && $this->imageFileType != "png" && $this->imageFileType != "jpeg"
      && $this->imageFileType != "gif" ) {
      echo "Sorry, alleen JPG, JPEG, PNG & GIF zijn toegestaan. ";
      $this->uploadOk = 0;
    }
  }

  public function uploadFile() {
    if ($this->uploadOk == 0) {
      echo "Sorry, je bestand is niet geupload door een error ";
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $this->target_file)) {
      } else {
        echo "Sorry, er is een error";
      }
    }
  }

  public function getFileName() {
    return $_FILES["fileToUpload"]["name"];
  }
}

// Usage:
$imageUploader = new ImageUploader("../private/cms/uploads");
$imageUploader->checkImage();
$imageUploader->checkFileExists();
$imageUploader->checkFileSize();
$imageUploader->checkFileType();
$imageUploader->uploadFile();
$img = $imageUploader->getFileName();


?>