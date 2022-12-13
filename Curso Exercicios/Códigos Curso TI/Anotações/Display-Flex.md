<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="display-flex.css">

# Flex - Box

# Flex - Container

O Flex Container é a tag que envolve os itens flex, ao indicar display: flex, essa tag passa a ser um Flex Container.


## <mark class="marcador">Diplay - Flex</mark>

É uma propriedade display, tal como `display: grid;` e deve ser inserido no elemento pai, ou conteiner de um conjunto de items

~~~css
.container {
  display: flex;
}
~~~

---

## <mark class="marcador">Flex-Direction</mark>

Direção do conteudo flex

~~~css
.container {
  display: flex;
  flex-direction: row; /* Por padrão é row - Linha */
  flex-direction: column;
  flex-direction: column-reverse;
  flex-direction: row-reverse;
}
~~~

<!-- Codígo Exemplo -->
<h1>flex-direction: row;</h1>
<section class="container1 row1">
	<div class="item1">1</div>
	<div class="item1">2</div>
	<div class="item1">3</div>
</section>

<h1>flex-direction: row-reverse;</h1>
<section class="container1 row-reverse1">
	<div class="item1">1</div>
	<div class="item1">2</div>
	<div class="item1">3</div>
</section>

<h1>flex-direction: column;</h1>
<section class="container1 column1">
	<div class="item1">1</div>
	<div class="item1">2</div>
	<div class="item1">3</div>
</section>

<h1>flex-direction: column-reverse;</h1>
<section class="container1 column-reverse1">
	<div class="item1">1</div>
	<div class="item1">2</div>
	<div class="item1">3</div>
</section>

---

## <mark class="marcador">Flex-wrap</mark>

Define a quebra de linha ou a quebra de coluna dependendo da direção do `flex-direction`

~~~css
.container {
  display: fle;
  flex-wrap: nowrap; /* Por padrão ele não quebra linhas */
}
~~~

<!-- Código Exemplo -->
<h1>flex-wrap: nowrap;</h1>
<section class="container2 nowrap2">
<!-- O nome grudado foi necessário pois eu preciso definir um conteúdo que não possa ser quebrado. Como uma palavra ou uma imagem. Se fosse uma frase, ele quebraria as linhas da frase antes de ultrapassar o container.	 -->
	<div class="item2">TesteDoItem1</div>
	<div class="item2">TesteDoItem2</div>
	<div class="item2">TesteDoItem3</div>
</section>

<h1>flex-wrap: wrap;</h1>
<section class="container2 wrap2">
	<div class="item2">TesteDoItem1</div>
	<div class="item2">TesteDoItem2</div>
	<div class="item2">TesteDoItem3</div>
</section>

<h1>flex-wrap: wrap-reverse;</h1>
<section class="container2 wrap-reverse2">
	<div class="item2">TesteDoItem1</div>
	<div class="item2">TesteDoItem2</div>
	<div class="item2">TesteDoItem3</div>
</section>

---

## <mark class="marcador">Flex-flow</mark>

`Flex-row` é um atalho para as propriedades `flex-direction` e `flex-wrap`

> Você não verá muito o seu uso, pois geralmente quando mudamos o flex-direction para column, mantemos o padrão do flex-wrap que é nowrap.
>
> E quando mudamos o flex-wrap para wrap, mantemos o padrão do flex-direction que é row. ~Origamid~



~~~css
.container {
  flex-flow: row wrap;
}
~~~

<h1>flex-flow: row nowrap;</h1>
<section class="container3 row-nowrap3">
	<div class="item3">TesteDoItem1</div>
	<div class="item3">TesteDoItem2</div>
	<div class="item3">TesteDoItem3</div>
</section>

<h1>flex-flow: row wrap;</h1>
<section class="container3 row-wrap3">
	<div class="item3">TesteDoItem1</div>
	<div class="item3">TesteDoItem2</div>
	<div class="item3">TesteDoItem3</div>
</section>

<h1>flex-flow: column-nowrap;</h1>
<section class="container3 column-nowrap3">
	<div class="item3">TesteDoItem1</div>
	<div class="item3">TesteDoItem2</div>
	<div class="item3">TesteDoItem3</div>
</section>

---

## <mark class="marcador">Justify-content</mark>

Alinha de acordo com a <mark class="marcador">direção de distribuição do flex</mark>. A propriedade só funciona se <mark class="marcador">os itens atuais não ocuparem todo o container</mark>. Isso significa que ao definir flex: 1; ou algo similar nos itens, a propriedade não terá mais função

Excelente propriedade para ser usada em casos que você deseja alinhar um item na ponta esquerda e outro na direita, como em um simples header com marca e navegação.

~~~css
.container {
  display: flex;
  justify-content: flex-start;
  justify-content: flex-end;
  justify-content: center;
  justify-content: space-between;
  justify-content: space-around;
}
~~~

<h1>justify-content: flex-start;</h1>
<section class="container4 flex-start4">
	<div class="item4">1</div>
	<div class="item4">Teste 2</div>
	<div class="item4">3</div>
	<div class="item4">4</div>
</section>

<h1>justify-content: flex-end;</h1>
<section class="container4 flex-end4">
	<div class="item4">1</div>
	<div class="item4">Teste 2</div>
	<div class="item4">3</div>
	<div class="item4">4</div>
</section>

<h1>justify-content: center;</h1>
<section class="container4 center4">
	<div class="item4">1</div>
	<div class="item4">Teste 2</div>
	<div class="item4">3</div>
	<div class="item4">4</div>
</section>

<h1>justify-content: space-between;</h1>
<section class="container4 space-between4">
	<div class="item4">1</div>
	<div class="item4">Teste 2</div>
	<div class="item4">3</div>
	<div class="item4">4</div>
</section>

<h1>justify-content: space-around;</h1>
<section class="container4 space-around4">
	<div class="item4">1</div>
	<div class="item4">Teste 2</div>
	<div class="item4">3</div>
	<div class="item4">4</div>
</section>

<h1>justify-content: space-around; // itens com flex: 1;</h1>
<section class="container4 space-around4">
	<div class="item4 flex4">1</div>
	<div class="item4 flex4">Teste 2</div>
	<div class="item4 flex4">3</div>
	<div class="item4 flex4">4</div>
</section>

<h1>justify-content: flex-start; // column</h1>
<section class="container4 flex-start4 column4">
	<div class="item4">1</div>
	<div class="item4">Teste 2</div>
	<div class="item4">3</div>
	<div class="item4">4</div>
</section>

<h1>justify-content: flex-end; // column</h1>
<section class="container4 flex-end4 column4">
	<div class="item4">1</div>
	<div class="item4">Teste 2</div>
	<div class="item4">3</div>
	<div class="item4">4</div>
</section>

<h1>justify-content: center; // column</h1>
<section class="container4 center4 column4">
	<div class="item4">1</div>
	<div class="item4">Teste 2</div>
	<div class="item4">3</div>
	<div class="item4">4</div>
</section>

<h1>justify-content: space-between; // column</h1>
<section class="container4 space-between4 column4">
	<div class="item4">1</div>
	<div class="item4">Teste 2</div>
	<div class="item4">3</div>
	<div class="item4">4</div>
</section>

<h1>justify-content: space-around; // column</h1>
<section class="container4 space-around4 column4">
	<div class="item4">1</div>
	<div class="item4">Teste 2</div>
	<div class="item4">3</div>
	<div class="item4">4</div>
</section>

<h1>justify-content: space-around; // column // itens com flex: 1;</h1>
<section class="container4 space-around4 column4">
	<div class="item4 flex4">1</div>
	<div class="item4 flex4">Teste 2</div>
	<div class="item4 flex4">3</div>
	<div class="item4 flex4">4</div>
</section>

---

## <mark class="marcador">Align-items</mark>

Refere-se ao alinhamento contrario da direção do flex, por exemplo: 

`Flex-direction: Column; `

    O align irá alinhar na horizontal, enquanto

`Flex-direction: row;`

    O align irá alinhar na vertical

~~~css
.container {
  align-items: stretch;
  align-items: flex-start;
  align-items: flex-end;
  align-items: center;
  align-items: baseline;
}
~~~

<h1>align-items: stretch;</h1>
<section class="container5 stretch5">
	<div class="item5">1</div>
	<div class="item5">Teste 2 do Item</div>
	<div class="item5">Teste 3 do Item Agora Mesmo</div>
	<div class="item5">Teste 4</div>
</section>

<h1>align-items: flex-start;</h1>
<section class="container5 flex-start5">
	<div class="item5">1</div>
	<div class="item5">Teste 2 do Item</div>
	<div class="item5">Teste 3 do Item Agora Mesmo</div>
	<div class="item5">Teste 4</div>
</section>

<h1>align-items: flex-end;</h1>
<section class="container5 flex-end5">
	<div class="item5">1</div>
	<div class="item5">Teste 2 do Item</div>
	<div class="item5">Teste 3 do Item Agora Mesmo</div>
	<div class="item5">Teste 4</div>
</section>

<h1>align-items: center;</h1>
<section class="container5 center5">
	<div class="item5">1</div>
	<div class="item5">Teste 2 do Item</div>
	<div class="item5">Teste 3 do Item Agora Mesmo</div>
	<div class="item5">Teste 4</div>
</section>

<h1>align-items: baseline;</h1>
<section class="container5 baseline5">
	<div class="item5 teste5">1</div>
	<div class="item5">Teste 2 do Item</div>
	<div class="item5">Teste 3 do Item Agora Mesmo</div>
	<div class="item5">Teste 4</div>
</section>

<h1>align-items: flex-stretch; // column</h1>
<section class="container5 stretch5 column5">
	<div class="item5">1</div>
	<div class="item5">Teste 2 do Item</div>
	<div class="item5">Teste 3 do Item Agora Mesmo</div>
	<div class="item5">Teste 4</div>
</section>

<h1>align-items: flex-start; // column</h1>
<section class="container5 flex-start5 column5">
	<div class="item5">1</div>
	<div class="item5">Teste 2 do Item</div>
	<div class="item5">Teste 3 do Item Agora Mesmo</div>
	<div class="item5">Teste 4</div>
</section>

<h1>align-items: flex-end; // column</h1>
<section class="container5 flex-end5 column5">
	<div class="item5">1</div>
	<div class="item5">Teste 2 do Item</div>
	<div class="item5">Teste 3 do Item Agora Mesmo</div>
	<div class="item5">Teste 4</div>
</section>

<h1>align-items: center; // column</h1>
<section class="container5 center5 column5">
	<div class="item5">1</div>
	<div class="item5">Teste 2 do Item</div>
	<div class="item5">Teste 3 do Item Agora Mesmo</div>
	<div class="item5">Teste 4</div>
</section>

<h1>align-items: baseline; // column</h1>
<section class="container5 baseline5 column5">
	<div class="item5 teste5">1</div>
	<div class="item5">Teste 2 do Item</div>
	<div class="item5">Teste 3 do Item Agora Mesmo</div>
	<div class="item5">Teste 4</div>
</section>

<h1>align-items: center; e justfy-content: center;</h1>
<section class="container5 alinhamento-central5">
	<div class="item5">Esse item está verticalmente alinhado ao centro.</div>
</section>

---

## <mark class="marcador">Align-content</mark>

Alinha as linhas do container em relação ao <mark class="marcador">eixo vertical</mark>. A propriedade só funciona se existir <mark class="marcador">mais de uma linha de flex-itens</mark>. Para isso o flex-wrap precisa ser <mark class="marcador">wrap</mark>.

Além disso o efeito dela apenas será visualizado caso o <mark class="marcador">container seja maior que a soma das linhas dos itens</mark>. Isso significa que se você não definir height para o container, a propriedade não influencia no layout.

~~~css
.content {
  display: flex;
  align-content: stretch;
  align-content: flex-start;
  align-content: flex-end;
  align-content: center;
  align-content: space-between;
  align-content: space-around;
}
~~~

<h1>align-content: stretch;</h1>
<section class="container6 stretch6">
	<div class="item6">TestandoPalavra1</div>
	<div class="item6">Teste 2 do Item</div>
	<div class="item6">Teste 3 do Item Agora Mesmo</div>
	<div class="item6">Teste 4</div>
	<div class="item6">Teste 5</div>
	<div class="item6">Teste 6</div>
	<div class="item6">Teste 7</div>
	<div class="item6">Teste 8</div>
</section>

<h1>align-content: flex-start;</h1>
<section class="container6 flex-start6">
	<div class="item6">TestandoPalavra1</div>
	<div class="item6">Teste 2 do Item</div>
	<div class="item6">Teste 3 do Item Agora Mesmo</div>
	<div class="item6">Teste 4</div>
	<div class="item6">Teste 5</div>
	<div class="item6">Teste 6</div>
	<div class="item6">Teste 7</div>
	<div class="item6">Teste 8</div>
</section>

<h1>align-content: flex-end;</h1>
<section class="container6 flex-end6">
	<div class="item6">TestandoPalavra1</div>
	<div class="item6">Teste 2 do Item</div>
	<div class="item6">Teste 3 do Item Agora Mesmo</div>
	<div class="item6">Teste 4</div>
	<div class="item6">Teste 5</div>
	<div class="item6">Teste 6</div>
	<div class="item6">Teste 7</div>
	<div class="item6">Teste 8</div>
</section>

<h1>align-content: center;</h1>
<section class="container6 center6">
	<div class="item6">TestandoPalavra1</div>
	<div class="item6">Teste 2 do Item</div>
	<div class="item6">Teste 3 do Item Agora Mesmo</div>
	<div class="item6">Teste 4</div>
	<div class="item6">Teste 5</div>
	<div class="item6">Teste 6</div>
	<div class="item6">Teste 7</div>
	<div class="item6">Teste 8</div>
</section>

<h1>align-content: space-between;</h1>
<section class="container6 space-between6">
	<div class="item6">TestandoPalavra1</div>
	<div class="item6">Teste 2 do Item</div>
	<div class="item6">Teste 3 do Item Agora Mesmo</div>
	<div class="item6">Teste 4</div>
	<div class="item6">Teste 5</div>
	<div class="item6">Teste 6</div>
	<div class="item6">Teste 7</div>
	<div class="item6">Teste 8</div>
</section>

<h1>align-content: space-around;</h1>
<section class="container6 space-around6">
	<div class="item6">TestandoPalavra1</div>
	<div class="item6">Teste 2 do Item</div>
	<div class="item6">Teste 3 do Item Agora Mesmo</div>
	<div class="item6">Teste 4</div>
	<div class="item6">Teste 5</div>
	<div class="item6">Teste 6</div>
	<div class="item6">Teste 7</div>
	<div class="item6">Teste 8</div>
</section>



# Flex Item

<!-- > Flex flow, é uma *shorthand* para `flex-direction` e `flex-wrap` -->