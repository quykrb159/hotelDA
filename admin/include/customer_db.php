<?php

function get_customer($customer_email) {
    global $db;
    $query = '
        SELECT *
        FROM customer
        WHERE email = :customer_email';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':customer_email', $customer_email);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_list_customer() {
    global $db;
    $query = '
        SELECT * FROM gender, customer WHERE gender.id=customer_email.gender_id';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function add_customer($name,$adress,$birth_day,$city,$email,$gender_id,$password,$passport,$phone) {
    global $db;
    $query = 'INSERT INTO customer
                 (`name`, `birth_day`, `passport`, `email`, `password`, `phone`, `gender_id`, `adress`, `city`)
              VALUES
                 (:name, :birth_day, :passport, :email, :password, :phone, :gender_id, :adress, :city)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':adress', $adress);
        $statement->bindValue(':birth_day', $birth_day);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':gender_id', $gender_id);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':passport', $passport);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':phone', $phone);
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was automatically generated
        $category_id = $db->lastInsertId();
        return $category_id;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function update_customer($email, $password) {
    global $db;
    $query = '
        UPDATE customer
        SET password = :password
        WHERE email = :email';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function delete_customer($email) {
    global $db;
    $query = 'DELETE FROM customer WHERE email = :email';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

?>