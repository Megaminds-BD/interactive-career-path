<?php

declare(strict_types=1);

class FinanceManager
{
    private array $transactions;
    private array $categories;
    private Storage $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;

        $this->categories = $this->storage->load(Category::getModelName());
        $this->transactions = $this->storage->load(Transaction::getModelName());

        if (count($this->categories) === 0) {
            $this->createDefaultCategories();
            $this->categories = $this->storage->load(Category::getModelName());
        }
    }

    private function createDefaultCategories(): void
    {
        $incomeCategories = [
            'Salary',
            'Business',
            'Loan',
        ];

        $expenseCategories = [
            'Rent',
            'Family',
            'Recreation',
            'Sadakah',
            'Food'
        ];

        $categories = [];

        foreach ($incomeCategories as $categoryName) {
            $categories[] = new IncomeCategory($categoryName);
        }

        foreach ($expenseCategories as $categoryName) {
            $categories[] = new ExpenseCategory($categoryName);
        }

        $this->storage->save(Category::getModelName(), $categories);
    }

    public function addIncome(float $amount, string $categoryName): void
    {
        $category = $this->getCategory($categoryName, TransactionType::INCOME);

        if(!$category) {
            printf("Invalid category!\n");
            return;
        }

        $income = new Income();
        $income->setAmount($amount);
        $income->setCategory($category);

        $this->transactions[] = $income;

        printf("Income added successfully!\n");

        $this->saveTransactions();
    }

    public function addExpense(float $amount, string $categoryName): void
    {
        $category = $this->getCategory($categoryName, TransactionType::EXPENSE);

        if(!$category) {
            printf("Invalid category!\n");
            return;
        }

        $expense = new Expense();
        $expense->setAmount($amount);
        $expense->setCategory($category);

        $this->transactions[] = $expense;

        printf("Expense added successfully!\n");

        $this->saveTransactions();
    }

    private function getCategory(string $name, TransactionType $type): ?Category
    {
        foreach ($this->categories as $category) {
            if ($category->getName() === $name && $category->getType() === $type) {
                return $category;
            }
        }

        return null;
    }

    public function showCategories(): void
    {
        printf("---------------------------------\n");
        foreach ($this->categories as $category) {
            printf("Name: %s, Type: %s\n", $category->getName(), $category->getType()->name);
        }
        printf("---------------------------------\n\n");
    }

    public function showIncomes(): void
    {
        printf("---------------------------------\n");
        foreach ($this->transactions as $transaction) {
            if ($transaction->getCategory()->getType() === TransactionType::INCOME) {
                printf("Amount: %.2f\n", $transaction->getAmount());
            }
        }
        printf("---------------------------------\n\n");
    }

    public function showExpenses(): void
    {
        printf("---------------------------------\n");
        foreach ($this->transactions as $transaction) {
            if ($transaction->getCategory()->getType() === TransactionType::EXPENSE) {
                printf("Amount: %.2f\n", $transaction->getAmount());
            }
        }
        printf("---------------------------------\n\n");
    }

    public function showSavings(): void
    {
        $savings = 0;

        printf("---------------------------------\n");
        foreach ($this->transactions as $transaction) {
            if ($transaction->getCategory()->getType() === TransactionType::INCOME) {
                $savings += $transaction->getAmount();
            } else {
                $savings -= $transaction->getAmount();
            }
        }

        printf("Savings: %.2f\n", $savings);
        printf("---------------------------------\n\n");
    }

    public function saveTransactions(): void
    {
        $this->storage->save(Transaction::getModelName(), $this->transactions);
    }
}