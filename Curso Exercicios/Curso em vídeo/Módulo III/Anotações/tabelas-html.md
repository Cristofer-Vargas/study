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