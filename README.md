
- Boilerplate visible sur <a href="https://boilerplate.elastik.eu/">boilerplate.elastik.eu/</a>
- <a href="https://boilerplate.elastik.eu/section-articles.html">Section articles</a>



# au cas où j'aurais ajouté un dossier avant de le mettre dans .gitignore, voici la solution
git rm -r --cached some-directory
git commit -m 'Remove the now ignored directory "some-directory"'
git push origin main


