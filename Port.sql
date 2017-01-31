Create database Port;
Use Port;

Create Table cuentas
(
	cuentaID int auto_increment,
	nombre nvarchar(60) not null,
	telefono nvarchar(12) not null,
	correo nvarchar(100) not null,
	constraint PK_Cuentas primary key (cuentaID)
);

Create Table tipoEmpresa
(
	tipoempresaid int auto_increment,
	nombre nvarchar(60) not null,
	descripcion nvarchar(100),
	constraint pk_tipoempresa primary key (tipoempresaid)
);

Create Table empresas
(
	empresaID int auto_increment,
	cuentaID int not null,
	tipoempresaid int not null,
	nombre nvarchar(60) not null,
	nombreComercial nvarchar(60) not null,
	telefono nvarchar(12) not null,
	direccion nvarchar(250) not null,
	constraint pk_empresas primary key (empresaid),
	constraint fk_empresas_cuentas foreign key (cuentaid) references cuentas(cuentaid),
	constraint fk_emrpesas_tipoempresas foreign key (tipoempresaid) references tipoempresas(tipoempresaid)
);

Create Table categorias
(
	categoriaid int auto_increment,
	empresaid int not null,
	nombre nvarchar(60) not null,
	constraint pk_categorias primary key (categoriaid),
	constraint fk_empresas foreign key (empresaid) references empresas(empresaid)
);

Create Table productos
(
	productoid int auto_increment,
	empresaid int not null,
	nombre nvarchar(60) not null,
	cantidad smallint not null,
	stock smallint not null,
	precio double not null,
	constraint pk_productos primary key (productoid),
	constraint fk_empresas foreign key (empresaid) references empresas(empresaid)
);

Create Table iva
(
	ivaid int auto_increment,
	valor double not null,
	constraint pk_iva 
)

Create Table ventas
(
	ventaid int auto_increment,
	empresaid int not null,
	ivaid int null,
	cliente nvarchar(200) not null,
	fecha date not null,
	subtotal double not null,
	descuento double not null,
	total double not null,
	constraint pk_ventas primary key (ventaid),
	constraint fk_ventas_empresas foreign key (empresaid) references empresas(empresaid),
	constraint fk_ventas_iva foreign key (empresaid) references empresas(empresaid)
);

Create Table detventas
(
	detventaid int auto_increment,
	ventaid int not null,
	productoid int not null,
	cantidad int not null,
	subtotal double not null,
	constraint pk_detventas primary key (detventaid),
	constraint fk_detventas_ventas foreign key (ventaid) references ventas(ventaid)
)



