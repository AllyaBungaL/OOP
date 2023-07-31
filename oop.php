<?php 

class laptop {
    public $merk;
    protected $Inch;
    private $code;

    public function __construct($merk, $code){
        $this->merk = $merk;
        $this->code = $code;
        echo "Objk Telah Dibuat.";
    }

    public function __destruct(){
        echo "ukuran {$this->Inch} merk laptop ini {$this->merk}  kode {$this->code}";
    }

    public function setInch($inch){
        $this->Inch = $inch;
    }

    public function getInch(){
        return $this->Inch;
    }

    public function setCode($code){
        $this->code = $code;
    }

    public function getCode(){
        return $this->code;
    }

    public function membaca(){
        echo "membaca wattpad";
    }

    public function buatCerita(){
        echo "membuat cerita.";
    }
}

     class hp extends laptop {
        private $aplikasi;

        public function __construct($Inch, $code){
            parent::__construct($Inch,$code);
            $this->aplikasi = true;
            echo "Objek Hp Dibuat.";
        }

        public function __destruct(){
            echo "Objek Hp Dihapus.";
        }

        public function aplikasi(){
            return $this->aplikasi ? "yes":"no";
        }

        public function membaca(){
            parent::membaca();
            echo "menaruh hp";
        }
}
//instalasi objek
$laptop = new laptop ("Lenovo", "386");
$hp = new hp ("ori", "ori");

//set all properti dari objek
$laptop->setInch("15.6inch");
$laptop->getInch();
$hp->setCode("ori");

?>