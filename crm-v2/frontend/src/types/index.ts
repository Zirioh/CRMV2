export type User = {
    id: number;
    name: string;
    email: string;
};

export type Product = {
    id: number;
    name: string;
    price: number;
};

export interface ApiResponse<T> {
    data: T;
    message: string;
    status: number;
}