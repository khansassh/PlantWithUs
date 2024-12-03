<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Search</title>
    <link href="https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
    <style>
        body {
    background-image: url('plantbg.jpg');
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: 'Parkinsans', sans-serif;
    color: #333;
}

.search-container {
    text-align: center;
    width: 100%;
    position: relative;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

h2 {
    margin-bottom: 20px;
    font-size: 2em;
    color: #4CAF50; 
}

input[type="text"] {
    padding: 10px;
    font-size: 16px;
    width: 300px;
    border: 2px solid #7fc17f;
    border-radius: 5px;
    outline: none;
    transition: border-color 0.3s;
}

input[type="text"]:focus {
    border-color: #4CAF50; 
}

.suggestions {
    background-color: rgba(255, 255, 255, 0.9); 
    border: 1px solid #ddd;
    width: 300px;
    margin-top: 10px; 
    padding: 10px;
    display: none;
    position: absolute;
    top: 60px; 
    left: 50%; 
    transform: translateX(-50%); 
    z-index: 9999; 
    border-radius: 5px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: opacity 0.3s ease, visibility 0.3s ease; 
}

.suggestions.show {
    display: block; 
    opacity: 1; 
}

.suggestions a {
    display: block;
    padding: 10px;
    color: #333;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
}

.suggestions a:hover {
    background-color: #7fc17f;
    color: white;
}

.suggestions p {
    margin: 0;
    padding: 10px;
    color: #999;
    text-align: center;
}
    </style>
</head>
<body>
    <div class="search-container">
        <h2>Search Your Plant</h2>
        <input type="text" id="search-input" placeholder="Search for a plant" onkeyup="searchPlants()">
        <div class="suggestions" id="suggestions-box"></div>
    </div>

    <script>
        const plants = [
            { id: 1, plant_name: "Mango" },
            { id: 2, plant_name: "Papaya" },
            { id: 3, plant_name: "Sunflower" },
            { id: 4, plant_name: "Daisy" },
        ];

        function searchPlants() {
            const query = document.getElementById('search-input').value;
            if (query.length < 1) {
                document.getElementById('suggestions-box').style.display = 'none';
                return;
            }

            const filteredPlants = plants.filter(plant => plant.plant_name.toLowerCase().includes(query.toLowerCase()));
            let output = '';
            if (filteredPlants.length > 0) {
                filteredPlants.forEach(function (plant) {
                    output += `<a href="plantpage.php?plant_id=${plant.id}">${plant.plant_name}</a>`;
                });
                document.getElementById('suggestions-box').style.display = 'block';
            } else {
                output = '<p>No plants found</p>';
                document.getElementById('suggestions-box').style.display = 'block';
            }
            document.getElementById('suggestions-box').innerHTML = output;
        }
    </script>
</body>
</html>