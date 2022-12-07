<?php 

class Product
{
    function list(){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `products`";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }

    // GET METHODS
    // public function getId()
    // {
    //     return $this->id;
    // }

    // public function getLabel()
    // {
    //     return $this->label;
    // }

    // public function getQuantity()
    // {
    //     return $this->quantity;
    // }

    // public function getPrice()
    // {
    //     return $this->price;
    // }

    // public function getImage()
    // {
    //     return $this->image;
    // }

    // public function getIdCategory()
    // {
    //     return $this->idCategory;
    // }


    // SET METHODS
    // public function setLabel(string $label)
    // {
    //     $this->label = $label;
    // }

    // public function setQuantity(string $quantity)
    // {
    //     $this->quantity = $quantity;
    // }

    // public function setPrice(string $price)
    // {
    //     $this->price = $price;
    // }

    // public function setIdCategory(string $idCategory)
    // {
    //     $this->idCategory = $idCategory;
    // }

    // public function setImage(string $image)
    // {
    //     $this->image = $image;
    // }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}