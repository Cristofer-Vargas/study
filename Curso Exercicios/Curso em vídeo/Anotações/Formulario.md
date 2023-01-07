<link rel="stylesheet" href="style.css">

<style>
</style>

# Formulários

![Formulário](https://gf7brasil.net/wp-content/uploads/2018/12/como-elaborar-um-formulario-de-pesquisa.png)

É de grande importância a utilização de quaisquer input ou campo de formulário, que sejam feitos dentro da tag `<form>`

~~~html
<form>
  ...
</form>
~~~


## Atributos Form

### Auto completar campos

Aquelas sugestões de dados para completar os campos podem ser desativadas com o atributo `autocomplete="off"` na tag `<form>`

~~~html
<form autocomplete="off">

</form>
~~~


### Ação do formulário

Na vdd essa ação, é o caminho do arquivo "script" para onde o formulario sera enviado, seja a linguagem que for

Ex.

~~~html
<form action="cadastro.php" autocomplete="off">
  <!-- Mandará as informações do formulario e dos campos para o arquivo cadastro.php -->
</form>
~~~


## Usar label em formulários

O label serve para "conectar e ligar" os campos com os inputs. Isso auxilia muito os mecanismos de busca, para acharem e reconhecerem o que é o formulario

Para conectar `Nome` a um `input` por exemplo, voce deve conectar o ID do input:

~~~html
<form>
  <label for="text-name">Nome: </label>
  <input type="text" name="text-name" id="nome">
</form>
~~~

<form>
  <label for="inome">Nome: </label>
  <input type="text" name="text-name" id="inome">
</form>


## Métodos GET e SET | Verbos HTTP

### Get

Por padrão do navegador, o navegador utiliza o `methode="GET"`, mesmo que não possua método explícito no formulário, o navegador manda as informações do formulário, através de uma URL, que por padrão fica exposta assim por exemplo, no caso de um input nome e idade: "`../cadastro.php?username=Cristofer&userold=19`", que pode ser muito prejudicial com dados sensíveis por exemplo.

~~~html
<form action="cadastro.php" methode="GET" autocomplete="off">
  <!-- Os métodos simples são GET e POST e são métodos HTTP -->
</form>
~~~

### Post

Este método não deixa explícito os dados na URL. Usando o mesmo exemplo anterior, ele ficaria assim após o envio do formulario: "`../cadastro.php`"

Porém, mesmo que ele não mostre com facilidade, pois ser um método HTTP, ainda é possivel que, vasculhando e inspecionando a página, você pode conseguir capturar os dados enviados da sua maquina, a través da aba `Network` na ferramente de inspecionar elemento 

~~~html
<form action="cadastro.php" methode="POST" autocomplete="off">
  <!-- Os métodos simples são GET e POST e são métodos HTTP -->
</form>
~~~

### Quando usar?

Para métodos `GET`, pode ser usados quando os dados tratados no fomrulario não forem sensiveis ou de grande importancia para manter seguros. O método GET também não deixa enviar mais de `3 KBytes` de dados. 

Para métodos `POST`, você usa para enviar fotos e arquivos, pois supera os `3 KBytes`, e também para dados razoavelmente sensiveis, pois o ideal é usar métodos `HTTPS`, mas o POST já ajuda um pouco

## Fieldset

Existe tambem uma tag chamada `<fieldset>`, que cria um campo e agrupa os elementos de um formulário, podendo tambem colocar a tag `<legend>` para definir o nome do campo, ou a função dele


<style>
  .inputs > input {
    display: block;
    margin: 15px 0;
  }
</style>

## Inputs

Em alguns inputs, como text e password, se não todos os outros, possuem certos atributos de input. 

`type` - Refere-se ao tipo de input, seja text, password, etc

`name` - É o nome do input, serve para certaz tags HTML e para PHP

`id` - Serve como identificador, útilo para o label direcionar para ele, e para o javascript

`required` - É um atributo que define que esse input é "Requerido" ou seja, obrigatório o preenchimento dele

`minlenght` - Em número, define a quantidade de caracteres minimas para o preenchimento do input

`maxlenght` - Em número, define a quantidade máxima de caracteres permitido

`size` - Em número define o "tamanho" do input para caber esse número definido de caracteres que irão aparecer

`placeholder` - Serve como dica, e mostra a frase no campo e some quando o campo for preenchido

`autocompelte` - Se colocado como atributo no input, ele serve para o navegador guardar essas informações para serem autocompletadas posteriormente em outros sites pro exemplo. É necessário que o form tenha `autocomplete="on"`

`value` - Pode ser usado em numeros, datas e palavras, e define o valor já estabelecido naquele campo, esse valor irá tirar o placeholder se você a penas o substituir

### Botão - button

<div class="inputs">
  <input type="button" value="button">
</div>

~~~html
  <input type="button" value="button">
~~~


### Caixa de seleção - Checkbox

<div class="inputs">
  <input type="checkbox" name="checkbox" id="checkbox">
</div>

~~~html
  <input type="checkbox" name="checkbox" id="checkbox">
~~~


### Cor - Color

<div class="inputs">
  <input type="color" name="color" id="color">
</div>

~~~html
  <input type="color" name="color" id="color">
~~~

Para cor podemos definir uma cor inicial que ela comece ao ser carregado, com o atributo `value=""` e um código `hexadecial`


### Data - Date

<div class="inputs">
  <input type="date" name="date" id="date">
</div>

~~~html
  <input type="date" name="date" id="date">
~~~


### Data e Tempo - Datetime

<div class="inputs">
  <input type="datetime" name="datetime" id="datetime">
</div>

~~~html
  <input type="datetime" name="datetime" id="datetime">
~~~


### Data e Tempo Local - Datetime-local

<div class="inputs">
  <input type="datetime-local" name="datelocal" id="datelocal">
</div>

~~~html
  <input type="datetime-local" name="datelocal" id="datelocal">
~~~


### Email - email

<div class="inputs">
  <input type="email" name="email" id="email">
</div>

~~~html
  <input type="email" name="email" id="email">
~~~


### Arquivo - File

<div class="inputs">
  <input type="file" name="file" id="file">
</div>

~~~html
  <input type="file" name="file" id="file">
~~~

Sempre que for possivel a utilização de um input de arquivo, é excenssial que você mude o método do do formulário para `POST`
 

### Escondido - Hidden

<div class="inputs">
  <input type="hidden" name="hidden">
</div>

~~~html
  <input type="hidden" name="hidden">
~~~


### Imagem - Image

<div class="inputs">
  <input type="image" src="image" alt="image">
</div>

~~~html
  <input type="image" src="image" alt="image">
~~~


### Mês - Month

<div class="inputs">
  <input type="month" name="month" id="month">
</div>

~~~html
  <input type="month" name="month" id="month">
~~~


### Número - Number

<div class="inputs">
  <input type="number" name="number" id="number">
</div>

~~~html
  <input type="number" name="number" id="number">
~~~

Inputs de número, ao inves de utilizar `minlenght` e `maxlenght`, é utilizado `min` e `max`

`step` - Esse atributo diz respeito ao quanto os números podem ir intercalando. 0.2, 0.5, 0.1 (no caso de nota, referente a média, é 0.5 por exemplo)


### Senha - Password

<div class="inputs">
  <input type="password" name="password" id="password">
</div>

~~~html
  <input type="password" name="password" id="password">
~~~


### Radio - Radio

<div class="inputs">
  <input type="radio" name="radio" id="radio">
</div>

~~~html
  <input type="radio" name="radio" id="radio">
~~~

Inputs radio de mesmo grupo devem ter **nomes / names** iguais e para não haver problemas, você deve adicionar o atributo `checked` em algum por padrão


### Alcance - Range

<div class="inputs">
  <input type="range" name="range" id="range">
</div>

~~~html
  <input type="range" name="range" id="range">
~~~

O input range tambem possui atributos para mudar seus dados iniciais com `min=""` para um valor minimo, e `max=""` para um valor maximo, esses atributos podem ajudar a dividir ou fracionar o range, assim como tambem podemos definir em qual valor ele pode começar, com o `value=""`. Por padrão ele começa sempre na metade


### Resetar - Reset

<div class="inputs">
  <input type="reset" value="reset">
</div>

~~~html
  <input type="reset" value="reset">
~~~


### Porcurar - Search

<div class="inputs">
  <input type="search" name="search" id="search">
</div>

~~~html
  <input type="search" name="search" id="search">
~~~


### Submeter - Submit

<div class="inputs">
  <input type="submit" value="submit">
</div>

~~~html
  <input type="submit" value="submit">
~~~


### Telefone - Tel ?

<div class="inputs">
  <input type="tel" name="tel" id="tel">
</div>

~~~html
  <input type="tel" name="tel" id="tel">
~~~




### Texto - Text

<div class="inputs">
  <input type="text" name="text" id="text">
</div>

~~~html
  <input type="text" name="text" id="text">
~~~


### Tempo - Time

<div class="inputs">
  <input type="time" name="time" id="time">
</div>

~~~html
  <input type="time" name="time" id="time">
~~~


### Caminho - URL

<div class="inputs">
  <input type="url" name="url" id="url">
</div>

~~~html
  <input type="url" name="url" id="url">
~~~


### Semana - Week

<div class="inputs">
  <input type="week" name="week" id="week">
</div>

~~~html
  <input type="week" name="week" id="week">
~~~

## Elementos fora da tag input

### Select e Datalist

Essas tags, são listas que permitem o usuário selecionar as opções que estão disponiveis pelo site. Essas duas tags possuem tambem as tags `<optgroup>` e `<option>`.

`Optgroup` - Agrupa as options e utilizando atributo `label=""` você define um nome para esse grupo. Por exemplo, um grupo de estados faz parte de uma região, que seria o optgroup

`Option` - São as opções disponiveis para que o usuário selecione as informações ja estabelecidas, elas possuem o atributo value, que define um valor para cada opção, fora o nome dela, por exmplo `<option value="RJ">Rio de Janeiro</option>`

~~~html
<label for="iest">Estado</label>
<select name="estado" id="iest">

  <optgroup label="Região Sudeste">
    <option value="MG">Minas Gerais</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="SP">São Paulo</option>
  </optgroup>
  
  <optgroup label="Região Nordeste">
    <option value="MA">Maranhão</option>
    <option value="PE">Pernambuco</option>
    <option value="RN">Rio Grande do Norte</option>
  </optgroup>

</select>
~~~

---

A diferença entre a tag `<select>` e a tag `<datalist>`, é que a select apenas permite opções **pré definidas**, e a datalist permite **além das pré definidas**, você enviar uma opção que **não está entre as disponiveis**

Para o `Datalist`, você deve conectar o `id` dele com a propriedade `list=""` de um input text. Ex:

~~~html
<label for="iprof">Profissão: </label>
<input type="text" name="prof" id="iprof" list="lstprof">

<datalist id="lstprof">
  <option value="ADM">Administrador</option>
  <option value="CONT">Contador</option>
  <option value="DEV">Desenvolvedor</option>
  <option value="PROF">Professor</option>
</datalist>

<!-- O valor pode ser tirado, pois na hora de selecionar uma opção ele irá selecionar pelo que tiver no value="" -->
~~~

### Text Area

Vale dizer que é melhor deixar o método do formulário como POST, pois pode haver muitos bytes para enviar, devido a quantidade de caracteres nesse tag

Você também pode definir um valor máximo de caracteres com `maxlength=""` para limitar o texto

~~~html
<label for="imsg">Menssagem: </label> <br>
<textarea name="msg" id="imsg" cols="30" rows="10"></textarea>
~~~