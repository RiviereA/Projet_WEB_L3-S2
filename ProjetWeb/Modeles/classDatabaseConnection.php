<?php
    class DatabaseConnection{

        private $_login;
        private $_password;
        private $_database_type;
        private $_connection;

        public function __construct(){
            $this->setLogin('qp330205');
            $this->setPassword('qp330205');
            $this->setDatabaseType('mysql:host=172.31.21.41;dbname=qp330205');
        }   

        public function setLogin($login){
            $this->_login = $login;
        }

        public function setPassword($password){
            $this->_password = $password;
        }

        public function setDatabaseType($databasetype){
            $this->_database_type = $databasetype;
        }

        public function getLogin(){
            return $this->_login;
        }

        public function getPassword(){
            return $this->_password;
        }

        public function getDatabaseType(){
            return $this->_database_type;
        }

        public function getConnection(){
            return $this->_connection;
        }

        public function toString(){
            echo $this->getDatabaseType()."    ".$this->getLogin()."           ".$this->getPassword();
        }

        public function seConnecter(){
            try{
                $this->_connection = new PDO($this->getDatabaseType(), $this->getLogin(), $this->getPassword());
                //return $this->_connection;
            } catch (PDOException $e) {
                print "Erreur ! : " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function checkIDs($usermail, $userpassword){
            try{
                //vérification du mot de passe
                $query = 'SELECT Mdp FROM Utilisateur WHERE Mail = :mail';
                $_prestatement = $this->_connection->prepare($query);
                $_prestatement->bindParam(':mail', $usermail);
                $_prestatement->execute(); 
                $_row = $_prestatement->fetch();
                if($_row==0){
                    return false;
                }else{
                    $hash = $_row['Mdp'];
                    if(password_verify($userpassword,$hash)){
                        return true;
                    }else{
                        return false;
                    }
                }
            }catch (PDOException $e) {
                print "Erreur ! : " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function getPseudo($usermail){
            $query = 'SELECT Pseudo FROM Utilisateur WHERE Mail = :mail';
            $_statement = $this->_connection->prepare($query);
            $_statement->bindParam(':mail', $usermail);
            $_statement->execute();
            $ligne = $_statement->fetch();
            $pseudo = $ligne['Pseudo'];
            return $pseudo;
        }

        public function addNewUser($userid, $usermail, $userpassword){
            try{
                $query = 'INSERT INTO Utilisateur VALUES (:id, :mail, :motdepasse, NULL)';
                $_statement = $this->_connection->prepare($query);
            
                $_statement->bindParam(':id', $userid);
                $_statement->bindParam(':mail', $usermail);
                $_statement->bindParam(':motdepasse', $userpassword);
                $_statement->execute(); 

                if($_statement->rowCount()==1){
                }else{
                    echo "<script>alert('Ce pseudonyme est déjà utilisé, veuillez en choisir un autre');</script>";
                }
            }catch(PDOException $e){
                print "Erreur ! : ". $e->getMessage(). "<br/>";
                die();
            }                
            
        }

        public function seDeconnecter(){
            $this->_connection = null;
        }

    }