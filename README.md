# Plano de Estudo iMasters Certified Professional
### PHP - Boas práticas

A prova de boas práticas em PHP foi completamente baseada em recomendações de boas práticas definidas pela comunidade internacional através das PSRs. Ela exigirá um alto nível de conhecimento destas recomendações.

<table style="width:100%">
  <tr>
    <th>Conteúdo</th>
    <th>Início</th>
    <th>Fim</th>
  </tr>
  <tr>
    <td>Designer Patterns</td>
    <td>06/08/2018</td>
    <td>13/08/2018</td>
  </tr>
  <tr>
    <td>S.O.L.I.D</td>
    <td>13/08/2018</td>
    <td>20/08/2018</td>
  </tr>
  <tr>
    <td>PSR's (PHP Standards Recommendations) </td>
    <td>20/08/2018</td>
    <td>28/08/2018</td>
  </tr>
</table>

## Designer Patterns
Design patterns (Padrões de projeto) são soluções de templates abstratas de alto nível. Pense nelas como um “blueprint” (desenho técnico ou documentação de uma arquitetura, etc.) para soluções e não como uma solução por si própria. Você não achará um framework que você poderá simplesmente aplicar para a sua aplicação; ao invés disso, você chegará ao design patterns através da refatoração do seu código e generalização do seu problema.

Design patterns não são somente aplicados em desenvolvimento de software; design patterns podem ser encontrados em diversas áreas da vida, da engenharia até da arquitetura. Em fato, foi o arquiteto Christopher Alexander que introduziu a ideia de patterns em 1970 para construir um vocabulário comum para discussões sobre design. Ele escreveu:

**_Cada pattern descreve um problema que ocorre várias vezes ao nosso redor e com isso, descrevem a solução para o problema de uma maneira que você pode usar essa solução diversas vezes sem ter que fazer a mesma coisa duas ou mais vezes._**

Os padrões “GoF” como é conhecido a “Gang of Four”, são organizado em 3 grupos distintos:
* **Padrões Criacionais**: envolvem a criação de instancias de objetos, todos fornecem alguma maneira de desconectar o cliente dos objetos a partir dos quais serão geradas instancias;
* **Padrões Estruturais**: permitem que você organize classes ou objetos em estruturas maiores;
* **Padrões Comportamentais**: preocupam-se com a forma como as classes e objetos interagem e com a distribuição de responsabilidades.

<table style="width:100%">
  <tr>
    <th>Criacionais</th>
    <th>Estruturais</th>
    <th colspan="2">Comportamentais</th>
  </tr>
  <tr>
    <td>Abtract Factofy</td>
    <td>Adapter</td>
    <td>Chain of Reponsibility</td>
    <td>Observer</td>
  </tr>
  <tr>
    <td>Builder</td>
    <td>Facade</td>
    <td>Command</td>
    <td>Stade</td>
  </tr>
  <tr>
    <td>Factory Method</td>
    <td>Bridge</td>
    <td>Strategy</td>
    <td>Interprete</td>
  </tr>
  <tr>
    <td>Prototype</td>
    <td>Decorator</td>
    <td>Iterator</td>
    <td>Template Method</td>
  </tr>
  <tr>
    <td>Singleton</td>
    <td>Flyweight</td>
    <td>Mediator</td>
    <td>Visitor</td>
  </tr>
  <tr>
    <td></td>
    <td>Composite</td>
    <td>Memento</td>
    <td></td>
  </tr>
   <tr>
    <td></td>
    <td>Proxy</td>
    <td></td>
    <td></td>
  </tr>
</table>

### Strategy 

![Strategy](img/Strategy.png)
