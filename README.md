# World Units of Measure 🌍📏

Welcome to the **World Units of Measure** repository, your go-to resource for all officially recognized units of measure, updated to the present day. This project is designed to be easy to use, flexible, and compatible with multiple formats, including **CSV**, **JSON**, **PHP**, and **SQL**, with added support for **Laravel**.

## 📁 Structure

The repository is divided into two main sections:

1. **Levels and Categories**: Organizes units of measure by groups.
2. **Units of Measure**: Provides a comprehensive list of all individual units (e.g., meters, kilograms) that are currently valid and in use globally.

## 📄 Dataset Details

### Levels and Categories

Each Level and Category entry includes the following fields:

-   `level_and_category` - The level and category of the unit.
-   `description` - A description of the unit.

Example:

```json
{
    "level_and_category": "3.9",
    "description": "Miscellaneous"
}
```

### Units of Measure

Each Unit of Measure entry includes the following fields:

-   `common_code` - Common code for the unit.
-   `name` - Full name of the unit.
-   `description` - A description of the unit.
-   `level_and_category` - The level and category of the unit.
-   `level_and_category2` - The secondary level and category.
-   `symbol` - The symbol used to represent the unit.
-   `conversion_factor` - The conversion factor.

Example:

```json
{
    "common_code": "NIU",
    "name": "number of international units",
    "description": "A unit of count defining the number of international units.",
    "level_and_category": "3.7",
    "level_and_category2": null,
    "symbol": "",
    "conversion_factor": ""
}
```

## 🗂️ Available Formats

-   **CSV**: Simple, tabular format that can be easily viewed and manipulated in spreadsheet programs.
-   **JSON**: Ideal for web-based applications, lightweight and easy to parse.
-   **PHP**: Provides PHP arrays for seamless integration into PHP projects.
-   **SQL**: SQL dump file for quick database imports.
-   **Laravel**: Includes migrations and seeders for fast integration into Laravel projects.

## 🚀 Quick Start

### For Laravel Projects:

1. Run the migrations:

    ```bash
    php artisan migrate --path=/database/migrations/0000_01_02_000090_create_level_and_categories_table.php
    php artisan migrate --path=/database/migrations/0000_01_02_000091_create_units_of_measure_table.php
    ```

2. Run the seeders:
    ```bash
    php artisan db:seed --class=LevelAndCategorySeeder
    php artisan db:seed --class=UnitOfMeasureSeeder
    ```

### For Other Formats:

-   Simply navigate to the desired format folder (`/csv`, `/json`, `/php`, or `/sql`) and utilize the files as needed.

## 📜 License

This project is open-source and available under the [MIT License](LICENSE).

## 🙌 Contributing

Feel free to fork the repo, make changes, and submit a pull request. Contributions are always welcome!

---

🚀 Enjoy working with the world's most comprehensive and updated unit of measure dataset!

```

```
