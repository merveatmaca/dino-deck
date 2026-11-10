# DINO-DECK

A small PHP web application that turns a `.fossil` file with dinosaur DNA sequences into dinosaur cards.

Made as practice for the BIT02 Web Technologies exam (HTML, CSS, PHP).

## Pages

- `index.php`: home page with instructions
- `submit.php`: upload a `.fossil` file and choose display options
- `process.php`: reads the file and shows one card per species
- `style.css`: shared styles for all pages

## Options

- **Color card border by diet**: card border color depends on the diet
- **Exclude all species that are not dinosaurs**: hides plesiosaurs, synapsids, pterosaurs, ichthyosaurs and mosasaurs

## How to run

1. Install PHP
2. Open a terminal in this folder
3. Run `php -S localhost:8080`
4. Open `http://localhost:8080` in your browser

## File format

Each species takes two lines:

    >Genus_species|Period|Size|Diet|Group|Location|Description
    DNASEQUENCE
