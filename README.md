
# au cas où j'aurais ajouté un dossier avant de le mettre dans .gitignore, voici la solution
git rm -r --cached some-directory
git commit -m 'Remove the now ignored directory "some-directory"'
git push origin main