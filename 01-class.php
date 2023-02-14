<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>01 Class</title>
</head>

<body class="min-h-[100vh] flex justify-center items-center">
    <main class="w-[380px] h-[600px] bg-black/60 rounded-[10px] text-white/100">
        <header class="flex gap-3 justify-center items-center border-b-2 pb-5 border-dashed">
            <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor"
                    class="w-10 h-10 hover:-translate-x-2 transition hover:text-red-400 hover:scale-140 text-red-700 ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            <h1 class="text-2xl">Class</h1>
        </header>
        <section class=" max-h-[500px] overflow-y-auto m-4  ">
            <?php
            // La comilla simple es textual en cambio comilla doble se puede adjuntar variables
            class Vehicle{
                // Attributes
                public $brand;
                public $refer;
                public $model;
                public $color;
                
                // Methods
                public function setAttributes($brand,$refer,$model,$color){
                    $this->brand = $brand;
                    $this->refer = $refer;
                    $this->model = $model;
                    $this->color = $color;
                    
                }

                public function getAttributes(){

                    return "<div class='p-4 border-2 ring-white/50 rounded-lg w-[300px] m-4'>
                             <p><strong>Brand:</strong>$this->brand</p>
                             <p><strong>Refer:</strong> $this->refer</p>
                             <p><strong>Model:</strong> $this->model </p>
                             <p><strong>Color:</strong>$this->color</p>
                            </div>";

                }
                
            }
            $vehicle1= new Vehicle();
            $vehicle1->setAttributes("Toyota","4x4","1990","Black");
            echo $vehicle1->getAttributes();

            $vehicle2= new Vehicle();
            $vehicle2->setAttributes("Renault","Twingo","2005","SpaceGray");
            echo $vehicle2->getAttributes();
            
            $vehicle3= new Vehicle();
            $vehicle3->setAttributes("Ford","F-150","2023","Blue");
            echo $vehicle3->getAttributes();
            



            // echo $vehicle1->brand;
            // echo $vehicle1->refer;
            // echo $vehicle1->model;
            // echo $vehicle1->color;

            ?>
        </section>

    </main>

    <script src="js/talwind-3.2.4.js"></script>

</body>

</html>