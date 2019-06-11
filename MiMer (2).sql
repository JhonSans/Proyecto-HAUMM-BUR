CREATE TABLE Factura Virtual (
  idFac_Vir INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nomb_Us VARCHAR(20) NULL,
  Productos VARCHAR(20) NULL,
  Direccion INTEGER UNSIGNED NULL,
  Tipo_Pago VARCHAR(20) NULL,
  Valor INTEGER UNSIGNED NULL,
  PRIMARY KEY(idFac_Vir)
);

CREATE TABLE Usuario (
  idUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nombre_Us VARCHAR(20) NULL,
  Apell_Us VARCHAR(20) NULL,
  Num_Tel INTEGER UNSIGNED NULL,
  Correo VARCHAR(20) NULL,
  PRIMARY KEY(idUsuario)
);

CREATE TABLE Hamburguesa (
  idHamburguesa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Factura Virtual_idFac_Vir INTEGER UNSIGNED NOT NULL,
  Nomb_Hamb VARCHAR(20) NULL,
  Costo INTEGER UNSIGNED NULL,
  PRIMARY KEY(idHamburguesa),
  FOREIGN KEY(Factura Virtual_idFac_Vir)
    REFERENCES Factura Virtual(idFac_Vir)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Compra (
  Id_Compra INTEGER UNSIGNED NOT NULL,
  Usuario_idUsuario INTEGER UNSIGNED NOT NULL,
  Factura Virtual_idFac_Vir INTEGER UNSIGNED NOT NULL,
  Fecha_Comp DATE NULL,
  Hora_Comp TIME NULL,
  Tipo_Entrega VARCHAR(20) NULL,
  PRIMARY KEY(Id_Compra, Usuario_idUsuario, Factura Virtual_idFac_Vir),
  FOREIGN KEY(Usuario_idUsuario)
    REFERENCES Usuario(idUsuario)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Factura Virtual_idFac_Vir)
    REFERENCES Factura Virtual(idFac_Vir)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Tipo de Entrega (
  Entrega VARCHAR(20) NOT NULL,
  idTipo_Entrega INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Compra_Factura Virtual_idFac_Vir INTEGER UNSIGNED NOT NULL,
  Compra_Usuario_idUsuario INTEGER UNSIGNED NOT NULL,
  Compra_Id_Compra INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(Entrega),
  FOREIGN KEY(Compra_Id_Compra, Compra_Usuario_idUsuario, Compra_Factura Virtual_idFac_Vir)
    REFERENCES Compra(Id_Compra, Usuario_idUsuario, Factura Virtual_idFac_Vir)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Domicilio (
  idDomicilio INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Tipo de Entrega_Entrega VARCHAR(20) NOT NULL,
  Domicilio VARCHAR(20) NULL,
  PRIMARY KEY(idDomicilio),
  FOREIGN KEY(Tipo de Entrega_Entrega)
    REFERENCES Tipo de Entrega(Entrega)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


