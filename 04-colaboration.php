<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>04 Colaboration</title>
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
            <h1 class="text-2xl">04 Colaboration</h1>
        </header>

        <section class=" max-h-[500px] overflow-y-auto m-4 text-white/80  ">
            <?php
            class Evolve {
                public function evolvePokemon($origin, $evolution) {
                    echo "<ul class='p-2 mb-4 rounded-md border-[1px] '>
                        <li><strong>Origin: </strong> $origin <strong> Evolution: </strong> $evolution </li>
                        </ul>";
                }
            }

            class Pokemon {
                private $origen;
                private $evolution;
                private $collaboration;

                public function __construct($origin, $evolution){
                    $this->origen = $origin;
                    $this->evolution = $evolution;
                    //Colaboration
                    $this->collaboration = new Evolve;
                }

                public function nextLevel() {
                    $this->collaboration->evolvePokemon($this->origen,$this->evolution);

                }
            }

            $pokemon1 = new Pokemon('Pichu', 'Pikachu');
            $pokemon1->nextLevel();
            $pokemon1 = new Pokemon('pikachu', 'raymond');
            $pokemon1->nextLevel();
            // ------->
            $pokemon2 = new Pokemon('Squirtle', 'Wartortle');
            $pokemon2->nextLevel();
            $pokemon2 = new Pokemon('Wartortle', 'Blastoise');
            $pokemon2->nextLevel();
            // ------>
            $pokemon3 = new Pokemon('Bulbasaur', 'Ivysaur');
            $pokemon3->nextLevel();
            $pokemon3 = new Pokemon('Ivysaur', 'Venasaur');
            $pokemon3->nextLevel();

            ?>
        </section>
    </main>

    <script src="js/talwind-3.2.4.js"></script>

</body>

</html>