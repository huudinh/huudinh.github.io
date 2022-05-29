import Todos from "./components/Todos";

function App() {
  return (
    <>
      <Todos />
    </>
  )
}

export default App;
// 1 npm run build
// 2 create new repo deploy-hello 
// 3 npm install -D gh-pages

// 4 package.json 
// a. add "homepage": "https://{username}.github.io/{repo-name}",
// b. add deploy và predeploy in "scripts"
// "predeploy": "npm run build", // Build before deploy
// "deploy": "gh-pages -d build" // Deploy the "build" folder

// 5 Setup Github Repo
// git init
// git add .
// git commit -m "first commit"
// git branch -M main
// git remote add origin https://github.com/huudinh/deploy-hello.git
// git push -u origin main

// 6 npm run deploy
// https://huudinh.github.io/deploy-hello

// 7 deploy again
// a. run add . / commit / push
// b. npm run build
// c. npm run deploy