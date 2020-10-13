<?php

class Connection
{
    public $server = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $database = 'sitecovid';
    public $conn;

    public function __construct()
    {
        $this->Connection();
    }

    private function Connection()
    {
        $this->conn = new mysqli(
            $this->server,
            $this->user,
            $this->pass,
            $this->database
        );
    }

    public function searchNews()
    {
        $sql = "SELECT * FROM news";
		$result = $this->conn->query($sql)
            or die("Falha na consulta");

		if ($result == true) {
			return $result;
		} else {
			die("Falha na consulta!");
		}
		$this->conn->close();
    }

    public function searchNewsAnimals()
    {
        $sql = "SELECT * FROM news WHERE category = 'animal'";
        $result = $this->conn->query($sql) or die("Falha na consulta");

        if ($result == true) {
            return $result;
        } else {
            die("Falha na consulta");
        }

        $this->conn->close();
    }

    public function searchNewsBusiness()
    {
        $sql = "SELECT * FROM news WHERE category = 'business'";
        $result = $this->conn->query($sql) or die("Falha na consulta");

        if ($result == true) {
            return $result;
        } else {
            die("Falha na consulta");
        }

        $this->conn->close();
    }

    public function searchNewsEducation()
    {
        $sql = "SELECT * FROM news WHERE category = 'education'";
        $result = $this->conn->query($sql) or die("Falha na consulta");

        if ($result == true) {
            return $result;
        } else {
            die("Falha na consulta");
        }

        $this->conn->close();
    }

    public function searchNewsHealthFood()
    {
        $sql = "SELECT * FROM news WHERE category = 'healthFood'";
        $result = $this->conn->query($sql) or die("Falha na consulta");

        if ($result == true) {
            return $result;
        } else {
            die("Falha na consulta");
        }

        $this->conn->close();
    }

    public function searchNewsPersonalCares()
    {
        $sql = "SELECT * FROM news WHERE category = 'personalCares'";
        $result = $this->conn->query($sql) or die("Falha na consulta");

        if ($result == true) {
            return $result;
        } else {
            die("Falha na consulta");
        }

        $this->conn->close();
    }

    public function searchNewsPersonalFinances()
    {
        $sql = "SELECT * FROM news WHERE category = 'personalFinances'";
        $result = $this->conn->query($sql) or die("Falha na consulta");

        if ($result == true) {
            return $result;
        } else {
            die("Falha na consulta");
        }

        $this->conn->close();
    }

    public  function registerNew($title, $imgname, $new, $category)
    {
        $sql = "INSERT INTO news 
        (title, img, new, category)
        VALUES(?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            'ssss',
            $title,
            $imgname,
            $new,
            $category
        );

        $stmt->execute();

        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>
			alert('$imgname');
			window.location.href='../../libs/pages/News.php';</script>";
            return $stmt;
        } else {
            die("Falha no cadastro!");
        }

        $stmt->close();
        $this->conn->close();
    }

    public function registerForm($email, $cpf, $quest1, $quest2, $kid, $teenager, $young, $adult, $old, $old_man, $quest4, $quest5)
    {
        $sql = "INSERT INTO searchform(email, cpf, quest1, quest2, kid, teenager, young, adult, old, old_man, quest4, quest5) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            'sissssssssss',
            $email,
            $cpf,
            $quest1,
            $quest2,
            $kid,
            $teenager,
            $young,
            $adult,
            $old,
            $old_man,
            $quest4,
            $quest5
        );
        $stmt->execute();

        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>
			alert('Cadastro realizado com sucesso!');
			window.location.href='../../libs/pages/form.php';</script>";
            return $stmt;
        } else {
            die("Falha no cadastro!");
        }
        $stmt->close();
        $this->conn->close();
    }
}
