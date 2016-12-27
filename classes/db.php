<?php

class db
{
    //1.1.В конструкторе устанавливается и сохраняется соединение с базой данных.
    // Параметры соединения берем из файла конфига
    protected $dbh;

    public function __construct($connectDB) {
        $this->dbh = new PDO($connectDB['base'], $connectDB['login'], $connectDB['pass']);
    }
    
    public function execute($sql){

        return $this->dbh->prepare($sql)->execute();
            //результатом будет bool(true/false) как и требует задание 1.2
    }

    //Метод query(string $sql, array $data) выполняет запрос, подставляет в него данные $data,
    // возвращает данные результата запроса либо false, если выполнение не удалось
    public function query($sql, array $data){

        $sth = $this->dbh->prepare($sql);

        //способ проверки 1 (простой)
            if( true == $sth->execute($data) ){
                //var_dump($sth->fetchAll());
                return $sth->fetchAll(PDO::FETCH_OBJ);
            } else {
                return false;
            }


        //способ проверки 2
        //через errorInfo()
        //$sth->errorInfo() заправшивает у SQL и драйвера, были ли ошибки в последнем запросе
        /*
            $result = $sth->fetchAll(PDO::FETCH_OBJ);

            if( ($sth->errorInfo()[0] + $sth->errorInfo()[1]) == 0 ) {
                return $result;
                    //ошибок нет

            } else {
                return false;
                    //errorInfo() вернул ошибку
            }
        */


    }
}