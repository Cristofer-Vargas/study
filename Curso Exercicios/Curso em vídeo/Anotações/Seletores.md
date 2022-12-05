<link rel="stylesheet" href="style.css">

# Seletores

![Css selectors](https://programadoresdepre.com.br/wp-content/uploads/2022/10/css-seletores.jpg)


*Seletores são formas de selecionar elementos, classes e IDs do documento HTML*

*Seletores perssonalizados são métodos de organizar e ampliar a forma de interação com diversos elementos no documento*

---

- Seletor de ID



- Seletor de Classe

~~~html
<body>
  <h1 id="titulo-principal"> Aprenda Desenvolvimento Web</h1>
  
  <h1> Aprenda HTML </h1>
  
  <h2 class="topico"> Semântica Web </h2>
  <p class="texto"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, nisi, error voluptatum deserunt expedita ipsa rem iusto illum sunt hic ad. Magni excepturi neque aliquid maiores tempore ea odio ipsa. </p>

  <h1> Aprenda CSS </h1>

  <h2 class="topico"> Estilos Web </h2>
  <p class="texto"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, nisi, error voluptatum deserunt expedita ipsa rem iusto illum sunt hic ad. Magni excepturi neque aliquid maiores tempore ea odio ipsa. </p>
</body>
~~~

~~~css
#titulo-principal {
  background-color: darkgreen;
  color: white;
  text-align: center;
}

.topico {
  text-align: right;
}

.texto {
  text-align: justify;
}
~~~

---

## Propriedade de Herança

Os estilos css respeitam propriedades de herança, podendo uma sobrescrever a outra, de acordo com a regra:
- 1º lugar: CSS externo
- 2º Lugar: CSS interno/loca
- 3º Lugar: CSS inline

Sendo assim, caso haja duplicidade nas configurações, o que fica valendo no final é a propriedade especificada nas configurações inine. Cada camada de aplicação de estilos vai adicionando propriedades novas e sobrescrevendo as configurações do nivel anterior.

Há tambem uma herança entre os seletores globais e os identificadores e classes. Sempre o último que irá sobrepor uma propriedade e valor, também irá herdar do anterior

Exemplo

~~~html
<body>
  <h1>Titulo</h1>
  <p>Paragrafo</p>

  <h1 class="mark">Titulo Especial</h1>
</body>
~~~

~~~css
h1 {
  background-color: gray;
  color: black;
}

.mark {
  color: green;
}
~~~

Neste caso todos os `<h1>` terão `background-color` e `color`, portanto o seletor perssonalizado por classe define a cor `green` e **HERDA** as demais propriedades pois ele tambem é um `<h1>`


---

## Pseduo-classes e pseudo-elementos

<br>

Uma <mark class="marcador">pseudo-classe</mark> CSS é uma palavra-chave adicionada às declarações de um seletor  após um sinal de dois pontos e especificam um <mark class="marcador">estado especial</mark> de um elemento. Existe várias `pseudo-classes` para estilos, podemos citar `:hover`, `:visited`, `:active`, `:checked`, `:empty` e `:focus`.

> Referece a um "estado de um elemento, classe ou id", por exemplo, marcado, vazio, etc.

Podemos seguir o seguinte exemplo:

~~~css
div:hover > p {
  color: white;
  background-color: red;
}

/* Significa que o elemento div, pai de p, quando passado o mouse em cima, irá aplicar essas propriedades em p*/

/* Link visitado */
a:visited {
  color: darkred;
}


/* Link ativo, quando você clica nele, ele ativa estas propriedades */
a:active {
  color: yellow;
}

~~~

<hr>

Já um <mark class="marcador">pseudo-elemento</mark> CSS é uma palavra-chave adicionada às declarações de um seletor após dois sinais de dois pontos e permitem que você formate um pedaçõ específico do elemento referenciado. Os principais pseudo-elementos usados nas CSS são `::before`, `::after`, `::first-letter`, `::first-line`.

~~~css
a::before {
  content: " - ";
}

a::after {
  content: " - ";
}

/* Adicionar conteudo " - " antes e depois nos links */
~~~