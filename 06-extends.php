<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>06 Extends</title>
</head>

<body class="min-h-[100vh] flex justify-center items-center">
    <main class="w-[380px] h-[600px] bg-black/60 rounded-[10px] text-white/100">
        <header class="flex gap-3 justify-center items-center border-b-2 pb-5 border-dashed">
            <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 hover:-translate-x-2 transition hover:text-red-400 hover:scale-140 text-red-700 ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            <h1 class="text-2xl">06 - Extends</h1>
        </header>

        <section class="max-h-[500px] overflow-y-auto m-4">
            <?php

            //Parent class
                class Operation{
                    protected $number1;
                    protected $number2;

                    public function __construct($number1,$number2){
                        $this->number1 = $number1;
                        $this->number2 = $number2;
                    }
                }
                //Child class
                class Addition extends Operation {
                    public function showResults(){
                        return "<p class='p-4 rounded-md border-[1px] border-white/80 mb-4'>
                            <strong>The addition is: </strong> ".($this->number1 + $this->number2).";
                        </p>";
                    }
                }

                class Subtraction extends Operation {
                    public function showResults(){
                        return "<p class='p-4 rounded-md border-[1px] border-white/80 mb-4'>
                            <strong>The Substraction is: </strong> ".($this->number1 - $this->number2).";
                        </p>";
                    }
                }

                class Product extends Operation {
                    public function showResults(){
                        return "<p class='p-4 rounded-md border-[1px] border-white/80 mb-4'>
                            <strong>The Product is: </strong> ".($this->number1 * $this->number2).";
                        </p>";
                    }
                }

                class Division extends Operation {
                    public function showResults(){
                        return "<p class='p-4 rounded-md border-[1px] border-white/80 mb-4'>
                            <strong>The Division is: </strong> ".($this->number1 * $this->number2).";
                        </p>";
                    }
                }

                class Pow extends Operation {
                    public function showResults(){
                        return "<p class='p-4 rounded-md border-[1px] border-white/80 mb-4'>
                            <strong>The Exponentiation is: </strong> ".($this->number1 ** $this->number2).";
                        </p>";
                    }
                }




                $operation1 = new Addition(5,6);
                echo $operation1->showResults();
                // ------>
                $operation2 = new Subtraction(512,12);
                echo $operation2->showResults();
                // ------->
                $operation3 = new Product(12,8);
                echo $operation3->showResults();
                // ------->
                $operation4 = new Division(1024,32);
                echo $operation4->showResults();
                // ------->
                $operation5 = new Pow(4,6);
                $operation5->showResults();



            ?>
        </section>
    </main>

    <script src="js/talwind-3.2.4.js"></script>

</body>

</html>