<?php

declare(strict_types=1);

class CLIApp
{
    private FinanceManager $financeManager;

    private const ADD_INCOME = 1;
    private const ADD_EXPENSE = 2;
    private const VIEW_INCOME = 3;
    private const VIEW_EXPENSE = 4;
    private const VIEW_SAVINGS = 5;
    private const VIEW_CATEGORIES = 6;
    private const EXIT_APP = 7;

    private array $options = [
        self::ADD_INCOME => 'Add income',
        self::ADD_EXPENSE => 'Add expense',
        self::VIEW_INCOME => 'View incomes',
        self::VIEW_EXPENSE => 'View expenses',
        self::VIEW_SAVINGS => 'View savings',
        self::VIEW_CATEGORIES => 'View categories',
        self::EXIT_APP => 'Exit'
    ];

    public function __construct()
    {
        $this->financeManager = new FinanceManager(new FileStorage());
    }

    public function run(): void
    {
        while (true) {
            foreach ($this->options as $option => $label) {
                printf("%d. %s\n", $option, $label);
            }

            $choice = intval(readline("Enter your option: "));

            switch ($choice) {
                case self::ADD_INCOME:
                    $amount = (float)trim(readline("Enter income amount: "));
                    $category = trim(readline("Enter income category: "));
                    $this->financeManager->addIncome($amount, $category);
                    break;
                case self::ADD_EXPENSE:
                    $amount = (float)trim(readline("Enter expense amount: "));
                    $category = trim(readline("Enter expense category: "));
                    $this->financeManager->addExpense($amount, $category);
                    break;
                case self::VIEW_INCOME:
                    $this->financeManager->showIncomes();
                    break;
                case self::VIEW_EXPENSE:
                    $this->financeManager->showExpenses();
                    break;
                case self::VIEW_SAVINGS:
                    $this->financeManager->showSavings();
                    break;
                case self::VIEW_CATEGORIES:
                    $this->financeManager->showCategories();
                    break;
                case self::EXIT_APP:
                    return;
                default:
                    echo "Invalid option.\n";
            }
        }
    }
}