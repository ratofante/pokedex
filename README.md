# pokedex
pokedex usando pokeapi.co

**************
** Objetivo **
**************
- Generar un buscador por #id y por #nombre para los 150 pokemons originales. 
- Cada resultado deberá mostrar:
  Nombre,
  Imagen,
  Tipo,
  Forma,
  Texto-Info-General,
  Evoluciones, con nombres e imagen respectivos,
  Movimientos que puede aprender.
- Trabajar con algunas animaciones sencillas en js y estilización general. 

Classes / Pokedex
- evoPath (Estructura):
['evo_count'] --> tiene datos sobre la cadena de evoluciones. Sirve para contar casos como los de eevee donde hay varias cadenas independientes (cada evolución de eevee se considera como una linea evolutiva aparte). Siempre debería ser count = 1. Para los casos donde es >1 se toma otra ruta en evoPath para sacar los datos de las evoluciones. 

['case'] --> 3 valores posibles: 'normal', 'no-evo', 'special'.
De esta manera sabemos con qué estamos lideando.
** Estaría bueno indicar cuántas evos son para poder maquetear la página a sabiendas **

[0] -> (string) nombre de la primera evo
[1] -> (string) nombre de la segunda evo
[2] -> (string) nombre de la tercera evo, sino == false. 

[id_0] --> Id de la 1era evo [0]
[id_1] --> Id de la 2da evo [1]
[id_2] --> ID de la 3ra evo [2].

Caso EEVEE:
['']
