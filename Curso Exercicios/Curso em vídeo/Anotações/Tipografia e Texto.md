# Tipografia e Texto
*Capítulo 14 Curso em Video*

## Um pouco da História

A preocupação dos tipos e tipografia, surgiu na época onde prensas fisicas eram utilizadas para fazer livros/jornais, etc. 

Os tipos móveis são as peças de meta/madeira/argila que eram usadas para carimbar a letra (ou o tipo) no papel

<br>

---
<br>

O mundo da tipografia se inicia em 1450 com o inventor alemão **Johannes Gutenberg** criador da prensa mecânica de tipos móveis.

Embora os Chineses ja haviam criados os primeiros conceitos de prensa mecânica, Gutenberg foi reconhecido como aquele que deu início à **Revolução da Imprensa**.

<br>

---
<br>

## Fonte, letra e família
*Anatomia*

Glifo - Uma única letra de uma família de glifos/fonte


### Categoria de fonte / classificação

- Serifadas
- Sem serifas
- Mono espaçada / monospace / com ou sem serifa
- Scriptada / Handwriting / script - fonte que simula a escrita / cursiva
- Decorativa / Display - fonte comemorativa ou fantasiosa

*Há também sub-categorias de fontes serifadas, como old style, transitional, didone, slab, clarendon e glyphic que apresentam caracteristicas detalhadas para cada uma

<br>

---
<br>

## Em código

No CSS, a fonte é aplicada por familia (se assim desejar), através da propriedade `font-family`. Se indicarmos mais de uma família, o navegador corresponderá com a **primeira fonte como prioridade**, as fontes em seguida irão sendo reproduzidas a penas se as de prioridade acima dela **não forem possiveis ser carregadas**.

Exemplo:

```css
body {
  font-family: Arial, Helvetica, sans-serif;
}

h1 {
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

h2 {
  font-family: 'Times New Roman', Times, serif;
}

```

> **Sequências seguras:** Existem as chamadas sequências seguras para especificação de familias de fontes. Para ver quais são elas, é possivel pesquisar por [CSS Web Safe Font Combinations](https://www.google.com/search?q=CSS+Web+Sage+Font+Combinations&oq=CSS+Web+Sage+Font+Combinations&aqs=chrome..69i57.335j0j1&sourceid=chrome&ie=UTF-8)

<br>

---
<br>

## Tamanhos


- Medida Absolutas

  `cm, mm, in, px, pt, pc`

- Medida Relativas

  `em, ex, rem, vw, vh, %`

Há algumas medidas para especificar o tamanho de uma fonte: `cm` (centimetros), `in` (polegadas), `pt` (pontos), `pc` (paica), `px` (pixels), etc. Para tamanhos de fonte que serão exibidas em tela, o recomendadoo pela [W3C](https://www.w3c.br/), é o `px` ou `em`.

A medida `em` é uma medidare ferencial em relação ao **tamanho original** da fonte. O tamanho padrão de uma fonte é gerealmente `16px`, isso equivale a `1em`. A partir dai, podemos configuras o tamanho das outros fontes ou de titulos como sendo `2em` ou **2 vezes** o tamanho da fonte original.

Exemplo: 

~~~css
body {
  font-size: 16px: /*Ja é por padrão*/
}

h1 {
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: 2em; /*2 vezes o tamanho o original*/
}

h2 {
  font-family: 'Times New Roman', Times, serif;
  font-size: 1.5em;
}
~~~

> Toda familia de fonte com espaço deve ser especificada com **aspas** ''.

<br>

---
<br>

## Outros estilos

A propriedade de font do css também permite mexer em `font-style` e `fonte weight` para aumentas a espeçura da letra, ou **negrito**

Podemos aplicar o valor itálico ao font-style usando `italic` (mais compativel) ou `oblique` (menos compativel). Já o negrito pode ser aplicado por nomes como `lighter`, `bold` e `bolder` ou pelo peso numério

<br>

---
<br>

## Shorthands

Shorthands são **atalhos** para propriedades css, e a propriedade `font` não fica de fora

Exemplo:

~~~css
p {
  /* Podemos substituir essa forma, que seria a mais completa */
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1em;
  font-style: italic;
  font-weight: bold;
}

p {
  /* Por essa forma, que serve como um atalho e faz as mesmas coisas que a forma completa */
  font: italic bold 1em Arial, Helvetica, sans-serif;
}
~~~

> A ordem dos atributos de uma shothand em CSS é importante. No caso da propriedade `font`, devemos informar nesta ordem:

- `font-style`
- `font-variant`
- `font-weight`
- `font-size/line-height`
- `font-family`

<br>

---
<br>

## Alinhamento

Existem Quadro tipos de Alinhamento de Texto:

~~~css
body {
  text-align: left;
  text-align: right;
  text-align: justify;
  text-align: center;
}
~~~

Identação de texto

~~~css
body {
  text-indent: 30px;
}
~~~

<br>

---
<br>

## Como descobrir fontes de sites

Há uma extensão do Google chamada `Fonts Ninja` que permite identificar textos selecionados

Essa extensão também mostra outros valores, como **familia tipográfica**, **tamanho** e **peso da fonte**, **espaçamento vertical** e **horizontal** e a **cor** aplicada a ele

<br>

---
<br>

## Como usar fontes do Google Fonts

Escolhendo a familia ou selecionando o estilo de fonte, voce pode copiar o código e importar ao css utilizando de uma regra.

~~~css
@import url('https://fonts.googleapis.com/css2?family=Caveat&display=swap');
~~~

Ou utilizando um link no html para referenciar a familia da fonte (ou uma unica fonte) no google fontes

~~~html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
~~~

> Neste exemplo foi usada a `font-family: 'Caveat';` e como método de fonte segura `font-family: 'Caveat', cursive;`

<br>

---
<br>

## Fontes Externas

Primeiramente você deve possuir uma pasta, diretório ou um local para armazenar a pasta ou o arquivo que ficará a(s) fonte(s) e importar

~~~css
@import-face {
  font-family: 'nome da fonte';
  src: url('caminho.otf') format();
}
~~~

> Os formatos aceitos e/ou que aceitam bem, dependem de navegador para navegador

Outros formatos de fontes:

- `Opentype` (otf)
- `Truetype` (ttf)
- `Embedded-opentype`
- `truetype-aat` (Apple Advanced Typography)
- `svg`

Pode-se tabém importar mais de uma fonte ou formato para cada fonte:

~~~css
@import-face {
  font-family: 'nome da fonte';
  src: url('caminho.otf') format('opentype'),
  url('caminho.ttf') format('truetype');
}
~~~

Pode-se tambem especificar como essa familia sera importada:

~~~css
@import-face {
  font-family: 'nome da fonte';
  src: url('caminho.otf') format('opentype'),
  url('caminho.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}

p {
  font-family: 'nome da fonte';
}

~~~

> Normalmente, como foi importado 2 formatos, o navegador irá usar automaticamento o que funcionar nele, seja otf ou ttf neste caso