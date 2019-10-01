use projetoPWII;

create table Produto(
idProduto int primary key auto_increment,
nome varchar(100) not null,
descricao varchar(250) not null,
preco numeric(10,2) not null,
ativo bool not null default true,
estoque int not null,
foto varchar(100) not null);

select * from Produto;