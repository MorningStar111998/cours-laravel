<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        /* Style for form container */
form {
  margin: 20px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
  max-width: 400px;
}

/* Style for labels */
label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

/* Style for input fields */
input[type="text"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}

/* Style for submit button */
input[type="submit"] {
  background-color: #4caf50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

/* Hover effect for submit button */
input[type="submit"]:hover {
  background-color: #45a049;
}

    </style>
</head>
<body>
    @yield('contenu')
</body>
</html>