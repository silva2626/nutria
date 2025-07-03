# NutrIA - Sistema de Gestão Inteligente para Nutricionistas

![NutrIA](https://img.shields.io/badge/status-em%20desenvolvimento-yellow)
![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel)
![React](https://img.shields.io/badge/React-18-61DAFB?logo=react)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-blue?logo=postgresql)

NutrIA é um sistema web projetado para otimizar o trabalho de nutricionistas e profissionais de dietética. A plataforma centraliza a gestão de pacientes e automatiza a criação de planos alimentares, permitindo que os profissionais dediquem mais tempo ao atendimento e à estratégia nutricional.

> **Nota do Desenvolvedor:** Este projeto é também um estudo sobre a aplicação de ferramentas de Inteligência Artificial para auxiliar no gerenciamento e na execução de tarefas de desenvolvimento de software.

## ✨ Principais Funcionalidades

*   **Gestão Completa de Pacientes:** Um prontuário digital para cadastrar, consultar e gerenciar todas as informações dos pacientes, incluindo dados pessoais, antropométricos, histórico clínico e restrições alimentares.
*   **Criador de Planos Alimentares:** Uma interface intuitiva para construir planos alimentares estruturados, definindo refeições e adicionando alimentos de forma organizada e personalizada.
*   **Assistente de IA para Alimentos:** Um recurso inteligente que sugere alimentos e preenche automaticamente suas informações nutricionais, agilizando drasticamente a montagem das dietas e reduzindo erros manuais.
*   **Geração de PDF Profissional:** Exporte os planos alimentares finalizados para um arquivo PDF com layout profissional, pronto para ser impresso ou enviado digitalmente ao paciente.

## 🚀 Tecnologias Utilizadas

*   **Backend:** Laravel 12 (PHP)
*   **Frontend:** Blade com componentes React (via Inertia.js) e Vite
*   **Banco de Dados:** PostgreSQL
*   **Estilização:** Tailwind CSS com ShadCN/UI para uma interface limpa e moderna.

## ⚙️ Como Começar

Siga os passos abaixo para configurar e executar o projeto em seu ambiente local.

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/seu-usuario/nutria.git
    cd nutria
    ```

2.  **Instale as dependências:**
    ```bash
    # Dependências do PHP
    composer install

    # Dependências do JavaScript
    npm install
    ```

3.  **Configure o ambiente:**
    ```bash
    # Copie o arquivo de exemplo e configure suas variáveis de ambiente
    cp .env.example .env

    # Gere a chave da aplicação
    php artisan key:generate
    ```
    > **Nota:** Não se esqueça de configurar a conexão com seu banco de dados PostgreSQL no arquivo `.env`.

4.  **Execute as migrações do banco de dados:**
    ```bash
    php artisan migrate
    ```

5.  **Compile os assets e inicie o servidor:**
    ```bash
    # Inicie o servidor de desenvolvimento do Vite
    npm run dev

    # Em outro terminal, inicie o servidor do Laravel
    php artisan serve
    ```

6.  Acesse `http://localhost:8000` em seu navegador.

## 🗺️ Roadmap

- [x] **MVP:** CRUD de Pacientes e Criador de Dietas (manual).
- [ ] **Fase 2:** Integração do "Assistente de IA" para busca de alimentos.
- [ ] **Fase 3:** Dashboards com gráficos para visualização do progresso do paciente.
- [ ] **Fase 4:** Portal do paciente para visualização online do plano alimentar.
- [ ] **Fase 5:** Biblioteca de receitas que podem ser adicionadas aos planos.

## 🤝 Contribuição

Contribuições são muito bem-vindas! Sinta-se à vontade para abrir uma **issue** para discutir novas funcionalidades ou reportar bugs. Se desejar contribuir com código, por favor, abra um **Pull Request**.

## 📄 Licença

Distribuído sob a licença MIT. Veja o arquivo `LICENSE` para mais informações.
