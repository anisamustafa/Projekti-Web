<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Dashboard</title>
    <style>
    body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }

        th, td {
            border: 2px solid blue;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: blue;
            color: white;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        #logout {
            margin-top: 20px;
            margin-right: 20px;
            align-self: flex-end;
        }
        button{
            color: blue;
            margin-top : 50px;
            border: 3px solid blue;
            font-size: 18px;
            border-radius : 20px;
        }
    </style>
</head>
<body>
    

    <table>
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>DESCRIPTION</th>
                 <th>PRICE</th>
                 <th>DISCOUNT</th>
                 <th>IMAGE</th>
               
                 <th>UPDATE</th>
                 <th>Delete</th>
               
                 <h1>Products dashboard</h1>
             </tr>
<a href = "../Logged_IN/logout.php">Log Out</a>
             <?php 
             include_once 'productsRepository.php';
             session_start();
/*
    if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
        header('Location: dashboard.php');
        exit();
    }
*/
    


             $productsRepository = new ProductsRepository();

             $products = $productsRepository->getAllProducts();

             foreach ($products as $product) {
                echo "
                <tr>
                    <td>{$product['product_id']}</td>
                    <td>{$product['product_name']}</td>
                    <td>{$product['product_description']}</td>
                    <td>{$product['product_price']}</td>
                    <td>{$product['product_discount']}</td>
                    <td>{$product['product_image']}</td>
                    <td><a href='update.php?id={$product['product_id']}'>Update</a></td>
                    <td><a href='delete.php?id={$product['product_id']}'>Delete</a></td>
                </tr>
                ";
            }
            
                
             ?>
             
    </table>

    <a href="insert.php"><button>Insert New Product</button></a>
</body>
</html>