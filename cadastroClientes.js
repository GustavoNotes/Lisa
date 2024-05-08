// Importa o módulo Express
const express = require('express');

// Crie uma instância do aplicativo Express
const app = express();

// Define a porta do servidor
const PORT = process.env.PORT || 3000; // Porta padrão é 3000, mas pode ser fornecida pelo ambiente

// Middleware para tratar o corpo das requisições (por exemplo, JSON)
app.use(express.json());

// Middleware para tratar as requisições HTTP
app.use((req, res, next) => {
    // Aqui você pode adicionar lógica de middleware, como autenticação, logging, etc.
    next(); // Chama a próxima função de middleware na cadeia
});

// Rota de exemplo
app.get('/exemplo', (req, res) => {
    // Lógica para a rota '/exemplo'
    res.send('Esta é uma página de exemplo.');
});

// Inicia o servidor na porta especificada
app.listen(PORT, () => {
    console.log(`Servidor rodando na porta ${PORT}`);
});
