<?php
include 'db_poloczenie.php';

// Określ liczbę wyników na stronę
$results_per_page = 9;

// Sprawdź, która strona jest aktualnie wybrana
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Oblicz offset
$offset = ($page - 1) * $results_per_page;

// Wykonaj zapytanie SQL, aby pobrać wszystkie samochody
$sql = "SELECT *, Typ, Paliwo FROM Samochody WHERE 1=1";

// Dodaj filtry do zapytania SQL
$filters = [];

if (isset($_GET['marka']) && !empty($_GET['marka'])) {
    $marka = $conn->real_escape_string($_GET['marka']);
    $filters[] = "Marka='$marka'";
}

if (isset($_GET['stan']) && !empty($_GET['stan'])) {
    $stan = $conn->real_escape_string($_GET['stan']);
    $filters[] = "Stan='$stan'";
}

if (isset($_GET['typ']) && !empty($_GET['typ'])) {
    $typ = $conn->real_escape_string($_GET['typ']);
    $filters[] = "Typ='$typ'";
}

if (isset($_GET['paliwo']) && !empty($_GET['paliwo'])) {
    $paliwo = $conn->real_escape_string($_GET['paliwo']);
    $filters[] = "Paliwo='$paliwo'";
}

if (isset($_GET['min_price']) && isset($_GET['max_price']) && $_GET['min_price'] !== '' && $_GET['max_price'] !== '') {
    $min_price = (float)$_GET['min_price'];
    $max_price = (float)$_GET['max_price'];
    $filters[] = "Cena BETWEEN $min_price AND $max_price";
}

// Jeśli są filtry, dodaj je do zapytania SQL
if (count($filters) > 0) {
    $sql .= ' AND ' . implode(' AND ', $filters);
}

// Dodaj sortowanie do zapytania SQL
if (isset($_GET['sort'])) {
    $sort = $_GET['sort'] == 'desc' ? 'DESC' : 'ASC';
    $sql .= " ORDER BY Cena $sort";
}

// Dodaj limit i offset do zapytania SQL
$sql .= " LIMIT $results_per_page OFFSET $offset";

// Wykonaj zapytanie
$result = $conn->query($sql);

if (!$result) {
    die('Query Error: ' . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/katalog.css">
   
    <title>Katalog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="./js/main.js"></script>
</head>
<body>

<nav class="nav">
    <ul class="sidebar">
        <li onclick="hideSidebar()"><a href="#" class="close-btn"></li>
        <li><a href="katalog.php" class="list-item">Katalog</a></li>
        <li><a href="#" class="list-item">O nas</a></li>
        <li><a href="#" class="list-item">Kontakt</a></li>
    </ul>
    <ul class="list-items">
        <li><a href="home.php" class="list-item"><img src="img/bg/logo.png" alt=""></a></li>
        <li><a href="katalog.php" class="list-item hide-on-mobile">Katalog</a></li>
        <li><a href="#" class="list-item hide-on-mobile">O nas</a></li>
        <li><a href="#" class="list-item hide-on-mobile">Kontakt</a></li>
        <li class="menu-btn" onclick="showSidebar()"><a href="#" class="list-item">Chowaj/pokazuj</a></li>
    </ul>
</nav>

<main class="hero-bg" id="home">
    <div class="hero-text">
        <h1>Komis Samochodowy</h1>
        <p>Twoje marzenia na czterech kołach</p>
        <div class="underline"></div>
        <a href="#about" class="chevron-down"></a>
    </div>
</main>

<section class="Katalog">
    <div class="wszystko">
        <div class="Sortowanie">
            <div class="inne">
                <form method="get" action="">
                    <ul>
                        <li>
                            <label for="sort"></label>
                            <select name="sort" id="sort">
                            <option value="">Wybierz sortowanie </option>
                                <option value="asc" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'asc') echo 'selected'; ?>>Rosnąco</option>
                                <option value="desc" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'desc') echo 'selected'; ?>>Malejąco</option>
                            </select>
                        </li>
                        <li>
                            <label for="marka"></label>
                            <select name="marka" id="marka">
                                <option value="">Wybierz markę</option>
                                <option value="Toyota" <?php if(isset($_GET['marka']) && $_GET['marka'] == 'Toyota') echo 'selected'; ?>>Toyota</option>
                                <option value="Honda" <?php if(isset($_GET['marka']) && $_GET['marka'] == 'Honda') echo 'selected'; ?>>Honda</option>
                                <option value="Nissan" <?php if(isset($_GET['marka']) && $_GET['marka'] == 'Nissan') echo 'selected'; ?>>Nissan</option>
                                <option value="BMW" <?php if(isset($_GET['marka']) && $_GET['marka'] == 'BMW') echo 'selected'; ?>>BMW</option>
                            </select>
                        </li>
                        <li>
                            <label for="stan"></label>
                            <select name="stan" id="stan">
                                <option value="">Wybierz stan</option>
                                <option value="Nowy" <?php if(isset($_GET['stan']) && $_GET['stan'] == 'Nowy') echo 'selected'; ?>>Nowy</option>
                                <option value="Używany" <?php if(isset($_GET['stan']) && $_GET['stan'] == 'Używany') echo 'selected'; ?>>Używany</option>
                            </select>
                        </li>
                        <li>
                            <label for="typ"></label>
                            <select name="typ" id="typ">
                                <option value="">Wybierz typ</option>
                                <option value="Sedan" <?php if(isset($_GET['typ']) && $_GET['typ'] == 'Sedan') echo 'selected'; ?>>Sedan</option>
                                <option value="SUV" <?php if(isset($_GET['typ']) && $_GET['typ'] == 'SUV') echo 'selected'; ?>>SUV</option>
                                <option value="Kombi" <?php if(isset($_GET['typ']) && $_GET['typ'] == 'Kombi') echo 'selected'; ?>>Kombi</option>
                                <option value="Hatchback" <?php if(isset($_GET['typ']) && $_GET['typ'] == 'Hatchback') echo 'selected'; ?>>Hatchback</option>
                            </select>
                        </li>
                        <li>
                            <label for="paliwo"></label>
                            <select name="paliwo" id="paliwo">
                                <option value="">Wybierz paliwo</option>
                                <option value="Benzyna" <?php if(isset($_GET['paliwo']) && $_GET['paliwo'] == 'Benzyna') echo 'selected'; ?>>Benzyna</option>
                                <option value="Diesel" <?php if(isset($_GET['paliwo']) && $_GET['paliwo'] == 'Diesel') echo 'selected'; ?>>Diesel</option>
                                <option value="Elektryczny" <?php if(isset($_GET['paliwo']) && $_GET['paliwo'] == 'Elektryczny') echo 'selected'; ?>>Elektryczny</option>
                                <option value="Hybryda" <?php if(isset($_GET['paliwo']) && $_GET['paliwo'] == 'Hybryda') echo 'selected'; ?>>Hybryda</option>
                            </select>
                        </li>
                        <div class="oddo">
                        <li>
                            <label for="min_price">Cena od:</label>
                            <input placeholder="$ " type="number" id="min_price" class="input" name="min_price" min="0" value="<?php if(isset($_GET['min_price'])) echo $_GET['min_price']; ?>">
                            <label for="max_price">Cena do:</label>
                            <input placeholder="$ " type="number" id="max_price" class="input" name="max_price" min="0" value="<?php if(isset($_GET['max_price'])) echo $_GET['max_price']; ?>">
                        </li>
                        </div>
                    </ul>
            </div>
                    <div class="buttons">
                        <button type="submit" class="przycisk">Zatwierdź filtry</button>
                        <button type="button" class="przycisk" id="resetBtn">Resetuj filtry</button>
                    </div>
                </form>
            
        </div>

        <div class="Samochody">
            <div class='kontener'>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='car'>";
                        echo "<img src='./img/auta/" . $row["NazwaZdjecia"] . "' alt='" . $row["Marka"] . " " . $row["Model"] . "'>";
                        echo "<div class='car-info'>";
                        echo "<p>Marka: " . $row["Marka"] . "</p>";
                        echo "<p>Model: " . $row["Model"] . "</p>";
                        echo "<p>Rok Produkcji: " . $row["RokProdukcji"] . "</p>";
                        echo "<p>Stan: " . $row["Stan"] . "</p>";
                        echo "<p>Typ: " . $row["Typ"] . "</p>";
                        echo "<p>Paliwo: " . $row["Paliwo"] . "</p>";
                        echo "<p>Opis: " . $row["Opis"] . "</p>";
                        echo "</div>";
                        echo "<p class='car-price'> $" . number_format($row["Cena"], 2, ',', ' ') . "</p>";
                        echo "</div>";
                    }
                    echo "</div>";

                    echo "<div class='pagination'>";
                    $total_sql = "SELECT COUNT(*) FROM Samochody WHERE 1=1";
                    if (!empty($marka)) {
                        $total_sql .= " AND Marka='$marka'";
                    }
                    if (!empty($stan)) {
                        $total_sql .= " AND Stan='$stan'";
                    }
                    if (!empty($typ)) {
                        $total_sql .= " AND Typ='$typ'";
                    }
                    if (!empty($paliwo)) {
                        $total_sql .= " AND Paliwo='$paliwo'";
                    }
                    if (isset($min_price) && isset($max_price)) {
                        $total_sql .= " AND Cena BETWEEN $min_price AND $max_price";
                    }
                    $total_result = $conn->query($total_sql);
                    $total_rows = $total_result->fetch_row()[0];
                    $total_pages = ceil($total_rows / $results_per_page);

                    for ($i = 1; $i <= $total_pages; $i++) {
                        $filter_params = "";
                        if (!empty($marka)) {
                            $filter_params .= "&marka=" . $marka;
                        }
                        if (!empty($stan)) {
                            $filter_params .= "&stan=" . $stan;
                        }
                        if (!empty($typ)) {
                            $filter_params .= "&typ=" . $typ;
                        }
                        if (!empty($paliwo)) {
                            $filter_params .= "&paliwo=" . $paliwo;
                        }
                        if (isset($min_price) && isset($max_price)) {
                            $filter_params .= "&min_price=" . $min_price . "&max_price=" . $max_price;
                        }
                        echo "<a href='katalog.php?page=$i$filter_params'>$i</a> ";
                    }
                    echo "</div>";
                } else {
                    echo "Brak danych";
                }
                ?>
            </div>
        </div>
    </div>
</section>

<script>
    
    function showSidebar() {
        document.querySelector('.sidebar').classList.toggle('show-sidebar');
    }
    function hideSidebar() {
        document.querySelector('.sidebar').classList.remove('show-sidebar');
    }
    document.getElementById('resetBtn').addEventListener('click', function() {
        window.location.href = window.location.pathname;
    });
</script>

</body>
</html>
