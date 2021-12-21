# Описание таблиц

## Таблица Категорий (category)
| id | uri | name |
| -----| ------| ------|
| INT | VARCHAR(256) | VARCHAR(256) |
| PRIMARY KEY | INDEX | -|

## Таблица Товаров (product)
| id | uri | category_id | available | category_sub_id | description | modified_time | name | oldprice | price | param | picture | produrl | vendor | vendorcode | similar_products |
| -----| ------| ------| -----| ------| ------| -----| ------| ------| -----| ------| ------| -----| ------| ------| ------|
| INT | VARCHAR(256) | VARCHAR(256) | VARCHAR(256) | VARCHAR(256) | text | VARCHAR(256) | VARCHAR(256) | VARCHAR(256) | VARCHAR(256) | text | text | text | VARCHAR(256) | VARCHAR(256) | VARCHAR(256) |
| PRIMARY KEY | INDEX | INDEX | -| -| -| -| -| -| -| -| -| -| -| -| -|
