<link rel="stylesheet" href="style.css">

<!-- <a href="../003/index.html">HTML</a> -->

# Tabelas em HTML

*A função das tabelas é tabular valores e organizar em linhas e colunas*

<img src="https://static.imasters.com.br/wp-content/uploads/2012/11/tab6.png" style="width: 100vw;">

---

## Fazendo a tabela em HTML

Toda tabela inicia-se com a tag `<table>`

Acrecenta-se linhas com `<tr>` - TABLE ROW

Dentro da linha acrecenta-se `<th>` - TABLE HEADER

Dentro da linha acrecenta-se `<td>` - TABLE DATA

~~~html
<table>
  <tr>
    <td>A1</td>
    <td>B1</td>
    <td>C1</td>
  </tr>
  <tr>
    <td>A2</td>
    <td>B2</td>
    <td>C2</td>
  </tr>
  <tr>
    <td>A3</td>
    <td>B3</td>
    <td>C3</td>
  </tr>
  <tr>
    <td>A4</td>
    <td>B4</td>
    <td>C4</td>
  </tr>
</table>

<!-- Neste exemplo, tem-se 3 linhas e 3 dados (não são colunas) em cada linha -->
~~~

Desta forma:

<style>
  .ex-1 td {
    border: 1px solid black;
    padding: 10px;
  }
</style>

<!-- border-collapse - Define o colapso da borda, se ela irão colpasar nas outras ou não. É bem usual em celulas de dados nos <td> -->

<div class="ex-1">
  <table>
    <tr>
      <td>A1</td>
      <td>B1</td>
      <td>C1</td>
    </tr>
    <tr>
      <td>A2</td>
      <td>B2</td>
      <td>C2</td>
    </tr>
    <tr>
      <td>A3</td>
      <td>B3</td>
      <td>C3</td>
    </tr>
    <tr>
      <td>A4</td>
      <td>B4</td>
      <td>C4</td>
    </tr>
  </table>
</div>

---

## Alinhamento de tabelas

Alinhamento para a esqueda e direita

Esquerda:

~~~css
td {
  border: 1px solid black;
  text-align: left;
}
~~~

<style>
  .ex-2 table {
    width: 100%;
  }
  .ex-2 td {
    border: 1px solid black;
    text-align: left;
  }
</style>

<div class="ex-2">
  <table>
    <tr>
      <td>A1</td>
      <td>B1</td>
      <td>C1</td>
    </tr>
    <tr>
      <td>A2</td>
      <td>B2</td>
      <td>C2</td>
    </tr>
    <tr>
      <td>A3</td>
      <td>B3</td>
      <td>C3</td>
    </tr>
    <tr>
      <td>A4</td>
      <td>B4</td>
      <td>C4</td>
    </tr>
  </table>
</div>


Direita:

~~~css
td {
  border: 1px solid black;
  text-align: right;
}
~~~

<style>
  .ex-3 table {
    width: 100%;
  }
  .ex-3 td {
    border: 1px solid black;
    text-align: right;
  }
</style>

<div class="ex-3">
  <table>
    <tr>
      <td>A1</td>
      <td>B1</td>
      <td>C1</td>
    </tr>
    <tr>
      <td>A2</td>
      <td>B2</td>
      <td>C2</td>
    </tr>
    <tr>
      <td>A3</td>
      <td>B3</td>
      <td>C3</td>
    </tr>
    <tr>
      <td>A4</td>
      <td>B4</td>
      <td>C4</td>
    </tr>
  </table>
</div>

Alinhamento no top, e bottom. Por padrão o alinhamento vertical é middle, ou seja, no meio


Em cima: 

~~~css
td {
  border: 1px solid black;
  text-align: center;
  vertical-align: top;
}
~~~

<style>
  .ex-4 table {
    width: 100%;
    height: 400px;
  }
  .ex-4 td {
    border: 1px solid black;
    text-align: center;
    vertical-align: top;
  }
</style>

<div class="ex-4">
  <table>
    <tr>
      <td>A1</td>
      <td>B1</td>
      <td>C1</td>
    </tr>
    <tr>
      <td>A2</td>
      <td>B2</td>
      <td>C2</td>
    </tr>
    <tr>
      <td>A3</td>
      <td>B3</td>
      <td>C3</td>
    </tr>
    <tr>
      <td>A4</td>
      <td>B4</td>
      <td>C4</td>
    </tr>
  </table>
</div>

<style>
  .ex-5 table {
    width: 100%;
    height: 400px;
  }
  .ex-5 td {
    border: 1px solid black;
    text-align: center;
    vertical-align: bottom;
  }
</style>

Em baixo:

~~~css
td {
  border: 1px solid black;
  text-align: center;
  vertical-align: bottom;
}
~~~

<div class="ex-5">
  <table>
    <tr>
      <td>A1</td>
      <td>B1</td>
      <td>C1</td>
    </tr>
    <tr>
      <td>A2</td>
      <td>B2</td>
      <td>C2</td>
    </tr>
    <tr>
      <td>A3</td>
      <td>B3</td>
      <td>C3</td>
    </tr>
    <tr>
      <td>A4</td>
      <td>B4</td>
      <td>C4</td>
    </tr>
  </table>
</div>

---

## Dicas para tabelas **Grandes**

Anatomia para tabelas grandes

Sempre usar as tags semânticas para thead cabeçalho, tbody corpo e tfoot para rodapé, mesmo que a tabela seja pequena, pois integra sentido na tabulação de dados

    THEAD
      TR, TD, TH
    TBODY
      TR, TD, TH
    TFOOT
      TR, TD, TH

> Igual o documento HTML, seria Cabeçalho, Corpo e Rodapé de forma semântica

~~~html
 <table>

    <caption>
      População por estado
    </caption>

    <thead>
      <tr>
        <th>Estado</th>
        <th>População</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>São Paulo</td>
        <td class="td-num">41 262 199</td>
      </tr>
      <tr>
        <td>Minas Gerais</td>
        <td class="td-num">19 597 330</td>
      </tr>
    </tbody>

    <tfoot>
      <tr>
        <th>Total de Habitantes</th>
        <td>213.317.639</td>
      </tr>
    </tfoot>
  </table>
~~~

> A diferença entre TH e TD serve para mostrar **semânticamente** os dados da tabela. 
> 
> TH serve para céculas que sejam como "Titulo" e não são dados respectivos de "Outra dependencia". 
>
> TD são **dados** dependentes de um "Titulo", por exemplo, o numero de habitante diz respeito ao dado do estado, mas é referente a quantidade da POPULAÇÃO

<table>
  <thead>
    <tr>
      <th>Estado</th>
      <th>População</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>São Paulo</td>
      <td class="td-num">41 262 199</td>
    </tr>
    <tr>
      <td>Minas Gerais</td>
      <td class="td-num">19 597 330</td>
    </tr>
  </tbody>

  <tfoot>
    <tr>
      <th>Total de Habitantes</th>
      <td>213.317.639</td>
    </tr>
  </tfoot>
</table>

> Há tambem a tag `<caption>` que serve como "legenda" / "Titulo" para a tabela, e fica em cima da tabela no html

assim: 

<table>

  <caption>
    População por estado
  </caption>

  <thead>
    <tr>
      <th>Estado</th>
      <th>População</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>São Paulo</td>
      <td class="td-num">41 262 199</td>
    </tr>
    <tr>
      <td>Minas Gerais</td>
      <td class="td-num">19 597 330</td>
    </tr>
  </tbody>

  <tfoot>
    <tr>
      <th>Total de Habitantes</th>
      <td>213.317.639</td>
    </tr>
  </tfoot>
</table>

---

## Escopo de titulos de tabela

Existe a propriedade `scope` que serve para dizer o escopo de um determinado titulo, se o escopo dele serve para a coluna ou para a linha

~~~html
<table>

  <caption>
    População por estado
  </caption>

  <thead>
    <tr>
      <th scope="col">Estado</th>
      <th scope="col">População</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>São Paulo</td>
      <td class="td-num">41 262 199</td>
    </tr>
    <tr>
      <td>Minas Gerais</td>
      <td class="td-num">19 597 330</td>
    </tr>
  </tbody>

  <tfoot>
    <tr>
      <th scope="row">Total de Habitantes</th>
      <td>213.317.639</td>
    </tr>
  </tfoot>
</table>
~~~

<table>

  <caption>
    População por estado
  </caption>

  <thead>
    <tr>
      <th>Estado</th>
      <th>População</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>São Paulo</td>
      <td class="td-num">41 262 199</td>
    </tr>
    <tr>
      <td>Minas Gerais</td>
      <td class="td-num">19 597 330</td>
    </tr>
  </tbody>

  <tfoot>
    <tr>
      <th>Total de Habitantes</th>
      <td>213.317.639</td>
    </tr>
  </tfoot>
</table>

> O TH de Estado e População dizem respeito ao escopo de suas proprias colunas, e o Total de Habitante que tambem é um TH / Titulo, tem seu escopo em linha, pois apresenta o dados posteriormente na mesma linha

---

## Efeito zebrado em tabela

Este é uma propriedade de pseudo-classe no css, pode-se definir como 

~~~css
tbody > tr:nth-child(2n) {
  background-color: gray;
}

/* Significa que todas as linhas (tr) diretamente dentro do corpo da tabela (tbody), terão as propriedades background-color, como gray

A pseudo-classe nth-child diz que o grupo de elementos irmão, será aplicado o fundo cinza de 2 em 2. Intercalando e pulando essa propriedade para ser aplicada intercaladamente. Pode-se usar outros valores para deixar mais espaçada essas propriedades, por exemplo, para serem aplicadas de 4n, 4 em 4 linhas
*/

tbody > tr:nth-child(odd) {
  background-color: gray;
}

/* Pode ser definido que as linhas impares (odd) ou pares (even) terão suas propriedades de fundo aplicadas neste grupo de elementos irmãos */
~~~

---

## Mesclando linhas e colunas

~~~html
<table style="width: 500px; border-collapse: separate;">

  <caption>
    Mesclando tableas em HTML
  </caption>

  <tr>
    <td>A</td>
    <td>B</td>
    <td>C</td>
  </tr>
  <tr style="background-color: gray;">
    <td rowspan="2">D</td>
    <td>E</td>
    <td>F</td>
  </tr>
  <tr>
    <td>H</td>
    <td>I</td>
  </tr>
  <tr style="background-color: black;">
    <td>J</td>
    <td colspan="2">K</td>
  </tr>

</table>
~~~

<table style="width: 500px; border-collapse: separate;">

  <caption>
    Mesclando tableas em HTML
  </caption>

  <tr>
    <td>A</td>
    <td>B</td>
    <td>C</td>
  </tr>
  <tr style="background-color: gray;">
    <td rowspan="2">D</td>
    <td>E</td>
    <td>F</td>
  </tr>
  <tr>
    <td>H</td>
    <td>I</td>
  </tr>
  <tr style="background-color: black;">
    <td>J</td>
    <td colspan="2">K</td>
  </tr>

</table>

~~~~html
    <td rowspan="2">D</td>
    <!-- rowspan refere-se a quantidade de linhas que a celula de dado irá ocupar -->

    <td colspan="2">K</td>
    <!-- colspan refere-se a quantidade de colunas que a celula de dado irá ocupar -->
~~~~

---

## Escopo de THs

Todo escope é de um table head, seja em scopo de linha ou coluna

Exemplo: 
~~~html
<table>
    <caption>
      Filmes Favoritos
    </caption>
    <thead>

      <!-- Escopo em row ou col é um titulo para a coluna ou para a linha, referindo-se que o titulo irá abordar os dados da coluna ou linha -->

      <tr>
        <th scope="col">Grupo</th>
        <th scope="col">Nomes</th>
        <th colspan="3" scope="colgroup">Filmes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th rowspan="3" scope="rowgroup">Mulheres</th>
        <td>Ana Maria Santos</td>
        <td>Alien</td>
        <td>Rambo</td>
        <td>Vingadores</td>
      </tr>
      <tr>

        <td>Beatriz Souza</td>
        <td>Hulk</td>
        <td>Inception</td>
        <td>Batman</td>
      </tr>
      <tr>

        <td>Cláudia Melo</td>
        <td>Oblivion</td>
        <td>Matrix</td>
        <td>Big Hero</td>
      </tr>

      <tr>
        <th rowspan="3" scope="rowgroup">Homens</th>
        <td>Bruno Mendonça</td>
        <td>Intocáveis</td>
        <td>Amnésia</td>
        <td>Gladiador</td>
      </tr>
      <tr>
        
        <td>Daniel Lourenço</td>
        <td>Wll-E</td>
        <td>Oldboy</td>
        <td>Dangal</td>
      </tr>
      <tr>
        
        <td>Fabiano</td>
        <td>Star Wars 5</td>
        <td>Taxi Driver</td>
        <td>Toy Story</td>
      </tr>
    </tbody>
  </table>
        
<!-- A Aplicação do rowgroup é quando ocorre de mesclar mais de uma linha para este head, ou seja seu titulo refere-se a um grupo de linhas. Da mesma forma serve o colgroup, para um grupo de colunas -->
~~~