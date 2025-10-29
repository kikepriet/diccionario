# 📘 Diccionario Técnico — Registro en JSON

Este proyecto permite registrar términos técnicos en un archivo **JSON** mediante un formulario web desarrollado en **PHP**.  
El propósito es facilitar la recopilación y organización de información (palabra, abreviatura y descripción) para posteriormente integrarla en una base de datos.

---

## 🧩 Características principales

- Formulario web en **PHP puro**, sin dependencias externas.  
- Registro de términos con los campos:
  - **Palabra**
  - **Abreviatura**
  - **Descripción**
- Almacenamiento de los registros en un archivo `diccionario.json` con un formato **JSON válido y estructurado como un arreglo de objetos**.
- Diseño **formal, responsivo y minimalista**, con **CSS inline**.
- Manejo automático del archivo JSON (se crea si no existe).
- Mensajes de confirmación o advertencia tras enviar el formulario.

---

## 🧠 Estructura del proyecto


---

## ⚙️ Requisitos

- Servidor local o remoto con soporte para **PHP 7.4 o superior**.  
- Permisos de escritura en el directorio del proyecto (para crear o modificar `diccionario.json`).

---

## 🚀 Instrucciones de uso

1. **Clonar o copiar** el proyecto en el directorio raíz de tu servidor local (por ejemplo: `htdocs` o `www`).

2. Acceder desde el navegador:


3. Completar los campos del formulario:
- **Palabra:** término principal.  
- **Abreviatura:** 
  * adj. = adjetivo
- **Descripción:** explicación detallada del término.

4. Presionar **“Enviar”**.  
El sistema guardará los datos en el archivo `diccionario.json`.

---

## 📄 Ejemplo del archivo `diccionario.json`

```json
[
 {
     "palabra": "CPU",
     "abreviatura": "Unidad Central de Procesamiento",
     "descripcion": "Parte del computador que interpreta y ejecuta instrucciones."
 },
 {
     "palabra": "RAM",
     "abreviatura": "Memoria de acceso aleatorio",
     "descripcion": "Memoria temporal utilizada por el sistema."
 }
]
