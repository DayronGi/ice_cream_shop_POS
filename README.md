# 🍦 Ice Cream Shop POS

Este proyecto es una **aplicación web tipo POS** diseñada para la gestión de inventario y ventas en una heladería.  
El sistema está construido con **Laravel** y permite administrar productos, controlar el stock y calcular las ventas de manera sencilla y diferente a los sistemas tradicionales.

---

## 🚀 Funcionalidades principales

- **Agregar productos**: Registro de nuevos productos con su costo, precio y cantidad inicial.  
- **Actualizar productos**: Modificación de la información del producto (precio, cantidad, estado, etc.).  
- **Eliminar productos**: Opción para dar de baja un producto que ya no se comercializa.  
- **Vender productos**: El sistema no registra cada venta de forma tradicional (ejemplo: 2 helados vendidos = 2 registros), sino que utiliza un modelo basado en inventario.

---

## 📊 Método de ventas

La lógica de este POS es particular y diferente:

1. **Inventario inicial**: Se parte de una cantidad inicial, por ejemplo `100` unidades.  
2. **Inventario final**: Al finalizar la jornada, el usuario registra cuántas unidades quedaron en stock (ejemplo: `20`).  
3. **Cálculo automático**:  
   - El sistema deduce que se vendieron `80` unidades.  
   - Se calcula el **total de la venta** y la **ganancia** a partir de esos datos.  
   - Esta información queda registrada en la base de datos para consultas posteriores.

De esta forma, el flujo de trabajo es mucho más simple y rápido para el negocio.

---

## 🛠️ Tecnologías utilizadas

- **Laravel** (Framework backend)  
- **MySQL/MariaDB** (Base de datos)  
- **Blade / API** (Interfaz y lógica de comunicación)  

---

## 🗄️ Tablas principales

- **products**: Contiene la información de cada producto.  
- **sales**: Registra las ventas calculadas automáticamente al final de la jornada.  
- **faults**: Permite registrar fallos o pérdidas de inventario.  

---

Este proyecto está bajo la licencia MIT. Puedes usarlo y modificarlo libremente.
