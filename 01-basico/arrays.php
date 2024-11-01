<?php

// $estudiantes = array('carlos', 'Jose', 'Maria', 'Luis');
$estudiantes = ['carlos', 'Jose', 'Maria', 'Luis'];

echo "<pre>";
// var_dump($estudiantes);
print_r($estudiantes);
echo "</pre>";

echo $estudiantes[2];

/**Array asociativa */

$aprendiz = [
  'nombre' => 'John',
  'apellido' => 'Araque',
  'edad' => 18,
  'deudas' => '2.000.000.00'
];

echo "<pre>";
print_r($aprendiz);
echo "</pre>";

$tutor = [
  'nombre' => 'John',
  'apellido' => 'Becerra',
  'edad' => 38,
  'direccion' => [
    'ciudad' => 'Bucaramanga',
    'barrio' => 'San Francisco',
    'nomenclatura' => 'Carrera 25 No 18-65',
    'zipcode' => 666554
  ],
  'habilidades' => [
    'git', 'html', 'css', 'js', 'php', 'python', 'sql'
  ]
  ];

echo "<pre>";
print_r($tutor);
echo "</pre>";

echo "<pre>";
print_r($tutor["direccion"]["nomenclatura"]);
echo "</pre>";

echo "<pre>";
print_r($tutor["habilidades"][4]);
echo "</pre>";


$tutor["habilidades"][3] = 'JavaScript';
$tutor["direccion"]["departamento"] = "santander";
array_splice($tutor["habilidades"],4,1);

echo "<pre>";
print_r($tutor);
echo "</pre>";

echo count($tutor["habilidades"]);


