<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>05 Parameters</title>
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
            <h1 class="text-2xl">05 Parameters</h1>
        </header>

        <section class="max-h-[500px] overflow-y-auto m-4">
            <?php
            class Country
            {
                public $name;

                public function __construct($name)
                {
                    $this->name = $name;
                }
            }

            class FifaWorldCup
            {
                private $country;
                private $year;
                private $winner;

                public function __construct($country, $year, $winner = 'Brazil')
                {
                    $this->country = $country;
                    $this->year = $year;
                    $this->winner = $winner;

                }

                public function showEvent()
                {
                    echo "<ul>
                            <li class='p-2 py-4 rounded-md grid gird-cols-3 gap-2 border-[1px] border-white/80 mb-4'>
                                <span><strong>Country: </strong> $this->country</span>
                                <span><strong>Year: </strong> $this->year</span>
                                <span><strong>Winner: </strong> $this->winner</span>
                            </li>
                          </ul>";
                }

            }

            $country1 = new Country('Italy');
            $worldCup1 = new FifaWorldCup($country1->name,1990,'Germany');
            $worldCup1->showEvent();
            // -------->
            $country2 = new Country('USA');
            $worldCup2 = new FifaWorldCup($country2->name,1994);
            $worldCup2->showEvent();
            // -------->
            $country3 = new Country('France');
            $worldCup3 = new FifaWorldCup($country3->name,1998, 'France');
            $worldCup3->showEvent();


            ?>
        </section>
    </main>

    <script src="js/talwind-3.2.4.js"></script>

</body>

</html>