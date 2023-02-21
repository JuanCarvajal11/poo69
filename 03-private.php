<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>03 Private</title>
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
            <h1 class="text-2xl">Private</h1>
        </header>

        <section class=" max-h-[500px] overflow-y-auto m-4 text-white/80">
            <h2 class="text-center text-2xl mb-6">Table Maker</h2>
            <form class="p-2 mb-4 grid grid-cols-2  rounded-md border-[1px] bg-white/20 gap-4 justify-center" action="" method="post">
                <div class="flex flex-col gap-4 items-center">
                    <label >Rows:</label>
                    <input type="range" name="nr" min="1" max="14" step="1" oninput="onr.value=this.value" value="1">
                    <output id="onr" class="text-2xl">1</output>
                </div>
                <div class="flex flex-col gap-4 items-center">
                    <label>Columns:</label>
                    <input type="range" name="nc" min="1" max="14" step="1" oninput="onc.value=this.value" value="1">
                    <output id="onc" class="text-2xl">1</output>
                </div>

                <button class="bg-black/70 p-2 w-[326px] rounded-lg hover:scale-95 transition-all">Make Table</button>
            </form>


            <?php 
                class Table{
                    private $nr;
                    private $nc;

                    public function __construct($nr,$nc){
                        $this->nr =$nr;
                        $this->nc=$nc;
                        $this->makeTable();
                    }
                    
                    private function makeTable(){
                        echo "<table class='mx-auto'>";
                        for($r = 1; $r <= $this->nr; $r++){
                            echo "<tr>";
                            for($c = 1; $c <= $this->nc;$c++){
                                echo "<td class='p-2 border-[1px]'></td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                       }
                    }

                    if ($_POST){
                        $table = new Table($_POST['nr'], $_POST['nc']);
                    }
            ?>
        </section>
    </main>

    <script src="js/talwind-3.2.4.js"></script>

</body>

</html>