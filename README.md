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
- Muestra la última palabra capturada en caso de existir.

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
  * adv. = adverbio
  * amb. = ambiguo
  * amer. = americanismo
  * anat. = anatomía
  * art. = artículo
  * com. = común
  * conj. = conjunción
  * cop. = copulativo
  * dem. = demostrativo
  * etc. = etcétera
  * f. = femenino
  * fam. = familiar
  * fig. = figurado
  * indet. = indeterminado
  * intr. = intransitivo
  * interj. = interjección
  * m. = masculino
  * n. = nombe
  * p.p. = participio pasado
  * prep. = preposición
  * pl. = plural
  * pron. = pronombre
  * quím. = química
  * r. = reflexivo
  * s. = sustantivo
  * tr. = transitivo

- **Descripción:** explicación detallada del término.

4. Presionar **“Enviar”**.  
El sistema guardará los datos en el archivo `diccionario.json`.

---

## 📄 Ejemplo del archivo `diccionario.json`

```json
[
 {
     "palabra": "ábaco",
     "abreviatura": "m.",
     "descripcion": "Aparato que sirve para contar."
 },
 {
     "palabra": "abad",
     "abreviatura": "m.",
     "descripcion": "Superior de un monasterio."
 }
]
