body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    text-align: center;
    color: #333;
}

form {
    display: grid;
    gap: 10px;
}

label {
    font-weight: bold;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding-top: 10%;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
}



ul {
    list-style-type: none;
    padding: 0;
}

li {
    border: 1px solid #ddd;
    margin: 5px 0;
    padding: 10px;
    border-radius: 4px;
    background-color: #fff;
    display: grid;
    grid-template-columns: auto 1fr auto;
    align-items: center;
    gap: 20px; 
}

li input[type="checkbox"] {
    margin-right: 10px;
}

a {
    text-decoration: none;
    color: #3498db;
    transition: color 0.3s;
}

a:hover {
    color: #2980b9;
}


a.update-link {
    background-color: #2ecc71;
    color: #fff;
    border: none;
    padding: 8px 12px;
    font-size: 14px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 4px;
    transition: background-color 0.3s;
}

a.update-link:hover {
    background-color: #27ae60;
}


button,
a.update-link,
button[name="delete_tasks"] {
    border: none;
    border-radius: 25px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button {
    background-color: #3498db;
    color: #fff;
}

button:hover {
    background-color: #2980b9;
}

a.update-link {
    background-color: #2ecc71;
    color: #fff;
    text-decoration: none; 
}

a.update-link:hover {
    background-color: #27ae60;
}


button[name="delete_tasks"] {
    background-color: #e74c3c;
    color: #fff;
}

button[name="delete_tasks"]:hover {
    background-color: #c0392b;
}
